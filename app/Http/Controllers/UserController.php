<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    public function index()
    {
       //return view('cadastro');
    }


    public function create()
    {
        return view("cadastro");
       //var_dump('cadastro');
    }
    public function store(StoreUserRequest $request)
    {
       
    }
    
}
