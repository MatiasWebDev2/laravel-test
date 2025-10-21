<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livros = Livro::with('editora')->get();
        return view("livros", ["livros" => $livros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
           "titulo" => "required|max:80",
           "isbn" => "",
           "sinopse" => "",
           "editora_id" => "required",
           "ano_publicacao" => "",
           "numero_paginas" => ""
        ],[
            "message.required" => "Esse campo é obrigatório!",
            "message.max" => "São permitidos apenas 80 caracteres!"
        ]);

        $validated['editora_id'] = (int) $validated['editora_id'];

        Livro::create($validated);

        return redirect('/livros')->with("success","Livro adicionado com sucesso!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Livro $livro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livro $livro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livro $livro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livro $livro)
    {
        //
    }
}
