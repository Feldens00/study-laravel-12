<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): View
    {
        return view ('users.index', [
            'users' => User::all(),
        ]);
    }

    public function show(int $id): View
    {
        $user = User::find($id);

        return view ('users.show', [
            'user' => $user,
        ]);
    }
}
