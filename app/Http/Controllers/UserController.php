<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list(Request $request)
    {
        dd($request);
        return view('user.list');
    }

    public function testShow(Request $request, int $id)
    {
        return 'text User: '.$id;
    }

    public function testStore(Request $request, ?int $id = 0)
    {

    }

    public function getToken(Request $request)
    {
        return csrf_token();
    }
}
