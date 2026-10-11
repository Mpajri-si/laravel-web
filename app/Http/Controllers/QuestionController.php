<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // <-- Tambahkan baris ini!

use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //dd($request->all());

          $request->validate([
        'nama' => 'required|min:5',
        'email' => ['required', 'email'],
        'pertanyaan' => 'required|min:10|max:300',
    ], [
        'nama.required' => 'Nama tidak boleh kosong',
        'nama.min' => 'Nama minimal 5 karakter',

        'email.required' => 'Email tidak boleh kosong',
        'email.email' => 'Email Tidak valid',

        'pertanyaan.required' => 'Pertanyaan tidak boleh kosong',
        'pertanyaan.min' => 'Pertanyaan minimal 10 karakter',
        'pertanyaan.max' => 'Pertanyaan maksimal 300 karakter',
    ]);


        $data['nama']       = $request->nama;
        $data['email']      = $request->email;
        $data['pertanyaan'] = $request->pertanyaan;

        return view('home-question-respon', $data);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}