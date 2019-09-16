<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('age',['only' => ['getUser']]);
    }

    public function generateKey(){
        return str_random(32);
    }

    public function getUser($id){
        return 'User ID = ' . $id;
    }

    public function getPost($cat1, $cat2){
        return 'Kategori 1 : ' . $cat1 . ' Kategori 2 : ' . $cat2;
    }
}
