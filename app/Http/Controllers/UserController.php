<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    public function index()
    {
       
    }


    public function create()
    {
        return view("cadastro");
       
    }
    public function store(StoreUserRequest $request)
    {
       
    }
    
}
