<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Faker\Factory;

class RandomUserController extends Controller
{
    public function getRandomUser()
    {
        return view('randomuser.index');
    }
    public function postRandomUser(Request $request)
    {
      //dd($request->all());
      $this->validate($request, [
        'numUsers' => 'required|numeric|min:1|max:50',
        ]);

        $data = $request->all();
        // use the factory to create a Faker\Generator instance
        $faker = Faker\Factory::create();

        $userData = [];

        $userData['name'] = $faker->name;
        $userData['birthdate'] = $faker->birthdate;
        $userData['phone'] = $faker->phone;
        $userData['address'] = $faker->address;
        $userData['profile'] = $faker->text;
    
        return view('randomuser.index', ['data' => $data, 'userData' => $userData]);
    }

}
