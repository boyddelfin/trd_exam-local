<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function add(Request $request) {

        $table = new User;
        $table->name = $request->name;
        $table->email = $request->email;
        $table->password = $request->password;
        $result = $table->save();
        if($result) {
            return ['result' => 'success'];
        } else {
            return ['result' => 'failed'];
        }
    }

    public function show(Request $request) {
        $user = User::find($request->id);

        return $user;

    }
}
