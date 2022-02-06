<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste() {
        // echo "A soma $p1 + $p2 é: ".($p1+$p2);

        // return view('site.teste', ['p1' => $p1, 'p2' => $p2]); //array associativo

        // return view('site.teste', compact('p1', 'p2')); //compact

        //return view('site.teste')->with('xyz', $p1)->with('zzz', $p2); //with()

        return view('site.teste');

    }
}
