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
        // return 'text User: '.$id;

        // return \response(
        //     "<h2>jakis tekst</h2>",
        //     200,
        //     ['Content-Type' => 'text/plain']
        // );

        // return \response("<b>jakies super text</b>")
        //     ->setStatusCode(200)
        //     ->header('Content-Type', 'text/html')
        //     ->header('Own-Header', 'Laravel');

        // return \redirect()->route('user.getToken');

        // return \redirect()->route('address', ['id' => $id]);

        // return \redirect()->action([UserController::class, 'list']);

        // return \redirect()->away('https:://www.google.pl');

        // return view('user.profile', ['id' => $id]);

        return \response()->json(['id' => $id]);

    }

    public function testStore(Request $request, ?int $id = 0)
    {

    }

    public function getToken(Request $request)
    {
        return csrf_token();
    }
}
