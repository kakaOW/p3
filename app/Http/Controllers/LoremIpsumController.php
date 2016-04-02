<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Badcow\LoremIpsum;

class LoremIpsumController extends Controller
{

    public function getLorem() {
        // return "Get the Lorem Ipsum parameters";
        return view('loremipsum.index');
    }

    public function postLorem(Request $request) {
        $this->validate($request, [
          'numParagraphs' => 'required|numeric|min:1|max:99',
          ]);

        // Random text
        $generator = new LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($request->input('numParagraphs'));
        return view('loremipsum.index')->with('paragraphs',$paragraphs);
    }
}
