<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Menampilkan daftar data User.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Menampilkan form untuk membuat User baru.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Menyimpan data User baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed', // validasi password_confirmation
        ]);

        $data = $request->all();
        // Enkripsi password menggunakan Hash::make()
        $data['password'] = Hash::make($request->password);

        User::create($data);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail data User (opsional).
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Menampilkan form untuk mengedit data User.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Memperbarui data User di database.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $data = $request->only(['name', 'email']);

        // Update password hanya jika diisi oleh admin/user
        if ($request->filled('password')) {
            $request->validate([
                'password' => 'min:6|confirmed',
            ]);
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('user.index')->with('success', 'User berhasil diperbarui.');
    }

    /**
     * Menghapus data User dari database.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'User berhasil dihapus.');
    }
}
