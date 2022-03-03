<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Faker\Factory as FactoryFaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function list(Request $request)
    {
        $users = [];

        $faker = FactoryFaker::create('pl-PL');
        $count = $faker->numberBetween(3,15);

        for ($i=0; $i < $count; $i++) {
            $users[] = [
                'id' => $faker->numberBetween(1, 1024),
                'name' => $faker->name()
            ];
        }

        return view('user.list', [
            'users' => $users
        ]);
    }

    public function show(int $userId)
    {
        $faker = FactoryFaker::create();
        $user = [
            "id" => $userId,
            "firstName" => $faker->firstName('male'),
            "lastName" =>$faker->lastName(),
            "city" => $faker->city(),
            "age" => $faker->numberBetween(12, 35),
            "html" => "<b>aaa</b>"
        ];
        return view('user.show', [
            'userId' => $userId,
            'userDetails' => $user
        ]);
    }

    public function getToken(Request $request)
    {
        return csrf_token();
    }
}
