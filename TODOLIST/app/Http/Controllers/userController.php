<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function userLogin(Request $request)
    {

    if (Auth::attempt(["nome" => $request->nome,"password"=> $request->senha])  ) {
        return redirect()->route("tasks.user");
    }
    return redirect()->route("login.page");
}
    public function createUser(Request $request)
    {
    $user = new User();
    if (strlen($request->nome)>3 && strlen($request->password)>=6) {
        $user->nome = $request->nome;
        $user->password = password_hash($request->password, PASSWORD_DEFAULT);
        $user->save();
        return redirect()->route("login.page");
    }
    return redirect()->route("create.user");
}


}
