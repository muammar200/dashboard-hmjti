<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Period;
use App\Models\Division;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Alert;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input("search", "");

        $news = News::latest()
            ->where("title", "LIKE", "%$search%")
            ->orWhere("content", "LIKE", "%$search%")
            ->paginate(5);

        return view('news.index', compact('news', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(NewsRequest $request)
    public function store(Request $request)
    {
        $validatedData = $request->only('title', 'content');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('', 'public');
            $validatedData['image'] = basename($imagePath);
        }

        News::create($validatedData);
        Alert::success('Berhasil!', 'Berita telah ditambahkan.');
        return redirect()->route('news.index');
        // } catch (\Throwable $th) {
        //     return redirect()
        //         ->back()
        //         ->withErrors(['error' => $th->getMessage()])
        //         ->withInput();
        // }
    }


    /**
     * Display the specified resource.
     */
    public function show(News $news) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(NewsRequest $request, News $news)
    public function update(Request $request, News $news)
    {
        $validatedData = $request->only(['title', 'content']);

        if ($request->hasFile('image')) {
            if ($news->image) {
                Storage::delete('public/' . $news->image);
            }

            $imagePath = $request->file('image')->store('', 'public');
            $validatedData['image'] = basename($imagePath);
        }

        $news->update($validatedData);
        Alert::success('Berhasil!', 'Berita telah diubah.');
        return redirect()->route('news.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::findOrFail($id);
        Storage::delete('public/' . $news->image);
        $news->delete();

        Alert::success('Berhasil!', 'Berita telah dihapus.');
        return redirect()->route('news.index');
    }
}
