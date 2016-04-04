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
      $this->validate($request, [
        'numUsers' => 'required|numeric|min:1|max:50',
        ]);

        $data = $request->all();
        // use the factory to create a Faker\Generator instance
        $faker = Factory::create();

        $userData = [];

        for($i=0; $i < $data['numUsers']; $i++) {
        $temp = [];
        $temp['name'] = $faker->name;
        $temp['birthdate'] = $faker->date;
        $temp['phone'] = $faker->phoneNumber;
        $temp['address'] = $faker->address;
        $temp['profile'] = $faker->text;

        $userData[$i] = $temp;
        }

        // dd($userData);   
        return view('randomuser.index')->with(['userData' => $userData]);
    }

}
