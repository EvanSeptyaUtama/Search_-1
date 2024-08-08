<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index', compact('users'));
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $query = User::query();

        $query->whereAny(['name','email','password'],'LIKE', "%$search%");

        $users = $query->get();
        return view('index',compact('users'));

    }
}
