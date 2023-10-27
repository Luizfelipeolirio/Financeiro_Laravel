<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnotationController extends Controller
{
    /**
     * Exibe a página inicial.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('annotation.index');
    }

    /**
     * Processa um formulário e faz algo com os dados.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function processForm(Request $request)
    {
        // Lógica para processar o formulário aqui

        return redirect()->route('annotation.index')->with('success', 'Formulário processado com sucesso.');
    }
}
