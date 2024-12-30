<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Alert;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $admins = User::paginate(5);
        // return view('admins.index', compact('admins'));
        $search = $request->input("search", "");

        $admins = User::latest()
        ->where("name", "LIKE", "%$search%")
        ->orWhere("username", "LIKE", "%$search%")
            ->paginate(5);

        return view('admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required',
        ], [
            'username.unique' => 'Username sudah ada.',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        Alert::success('Berhasil', 'Berhasil Mendaftarkan User');
        return redirect()->route('admins.index');
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
    public function edit(User $admin)
    {
        return view('admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,' . $id,
            'password' => 'nullable'
        ],[
            'username.unique' => 'Username sudah ada.',
        ]);

        $admin = User::findOrFail($id);

        $data = [
            'name' => $validatedData['name'],
            'username' => $validatedData['username'],
        ];

        if ($request->filled('password')) {
            $data['password'] = bcrypt($validatedData['password']);
        }

        $admin->update($data);

        Alert::success('Berhasil', 'Berhasil Memperbarui Admin');
        return redirect()->route('admins.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = User::findOrFail($id);
        $admin->delete();

        Alert::success('Berhasil!', 'Admin telah dihapus.');
        return redirect()->route('admins.index');
    }
}
