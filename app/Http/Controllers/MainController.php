<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // public function show (){
    //     return view('welcome');
    // }

    // public function first() {
    //     $a = 1;
    //     $b = 2;
    //     $c = $a + $b;
    //     $dev = $b - $a;
    
    //     return view('first', compact('c', 'dev'));
    // }

    public function showIndex(){
        return view ('home');
    }

    public function showArray(){
        $arr = [
            ['id' => 1, 'title' => 'продукт 1', 'price' => 500],
            ['id' => 2, 'title' => 'продукт 2', 'price' => 600]
        ];

        return view ('array', compact("arr") );
    } 
}
