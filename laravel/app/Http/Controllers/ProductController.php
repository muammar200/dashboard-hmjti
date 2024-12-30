<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input("search", "");

        $products = Product::latest()
            ->where("title", "LIKE", "%$search%")
            ->orWhere("description", "LIKE", "%$search%")
            ->paginate(5);

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:products,title',
            'description' => 'required|string',
            'no_wa' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg'
        ], [
            'title.unique' => 'Nama product sudah ada.',
            'title.required' => 'Nama product wajib diisi.',
            'description.required' => 'Deskripsi wajib diisi.',
            'no_wa.required' => 'No WhatsApp wajib diisi.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Gambar hanya mendukung format JPEG, PNG, JPG.',
        ]);    

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('', 'public');
            $validatedData['image'] = basename($imagePath);
        }

        Product::create($validatedData);
        Alert::success('Berhasil!', 'Product telah ditambahkan.');
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:products,title,' . $product->id,
            'description' => 'required|string',
            'no_wa' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg|nullable'
        ], [
            'title.unique' => 'Nama product sudah ada.',
            'title.required' => 'Nama product wajib diisi.',
            'description.required' => 'Deskripsi wajib diisi.',
            'no_wa.required' => 'No WhatsApp wajib diisi.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Gambar hanya mendukung format JPEG, PNG, JPG.',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::delete('public/' . $product->image);
            }

            $imagePath = $request->file('image')->store('', 'public');
            $validatedData['image'] = basename($imagePath);
        }

        $product->update($validatedData);
        Alert::success('Berhasil!', 'Product telah diubah.');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        Storage::delete('public/' . $product->image);
        $product->delete();

        Alert::success('Berhasil!', 'Product telah dihapus.');
        return redirect()->route('products.index');
    }
}
