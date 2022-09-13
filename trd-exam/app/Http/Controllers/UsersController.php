<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function add(Request $request) {

        $table = new User;
        $table->name = $request->name;

        return ;
    }
}
