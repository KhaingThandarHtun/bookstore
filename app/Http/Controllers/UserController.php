<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUser;


class UserController extends Controller
{
    function create(){
        return view('users.create');
    }
    public function store(StoreUser $request){
        $input=$request->all();
        $user=User::create($input);
        return back()->width('success','User created successfully.');
    }
}
