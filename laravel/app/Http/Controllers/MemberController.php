<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Member;
use App\Models\Period;
use App\Models\Division;
use App\Models\Position;
use Illuminate\Http\Request;
use App\Http\Requests\MemberRequest;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input("search", "");
        $periods = Period::all();

        $members = Member::latest()
            ->where("name", "LIKE", "%$search%")
            ->paginate(5);

        return view('members.index', compact('members', 'periods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $periods = Period::all();
        $divisions = Division::all();
        $positions = Position::all();
        return view('members.create', compact('periods', 'divisions', 'positions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MemberRequest $request)
    {
        $validatedData = $request->validated();
        unset($validatedData['image']);

        $imagePath = $request->file('image')->store('', 'public');
        $imageFileName = basename($imagePath);

        $validatedData['image'] = $imageFileName;

        Member::create($validatedData);
        Alert::success('Berhasil!', 'Pengurus telah ditambahkan.');
        return redirect()->route('members.index');
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
    public function edit(Member $member)
    {
        $periods = Period::all();
        $divisions = Division::all();
        $positions = Position::all();
        return view('members.edit', compact('periods', 'divisions', 'positions', 'member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MemberRequest $request, Member $member)
    {
        // dd($request->all());
        $validatedData = $request->validated();
        unset($validatedData['image']);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $member->image);
            $imagePath = $request->file('image')->store('', 'public');
            $imageFileName = basename($imagePath);
            $validatedData['image'] = $imageFileName;
        }

        $member->update($validatedData);
        Alert::success('Berhasil!', 'Data Pengurus telah diubah.');
        return redirect()->route('members.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member = Member::findOrFail($id);
        Storage::delete('public/' . $member->image);
        $member->delete();

        Alert::success('Berhasil!', 'Pengurus telah dihapus.');
        return redirect()->route('members.index');
    }
}
