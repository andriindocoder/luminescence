<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('age',['except' => ['getUser']]);
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

    public function fooBar(Request $request){
        // if($request->is('foo/bar')){
        //     return 'Success';
        // }else{
        //     return 'Fail';
        // }
        // return $request->path();
        return $request->method();
    }

    public function userProfile(Request $request){
        // $user['name'] = $request->name;
        // $user['username'] = $request->username;
        // $user['email'] = $request->email;
        // $user['password'] = $request->password;

        // return $user;
        // return $request->all();

        // return $request->input('name', 'John Doe');

        // if($request->filled('name')){
        //     return 'Success';
        // }else{
        //     return 'Fail';
        // }

        return $request->except(['username','password']);
    }

    public function response(){
        $data['status'] = 'Success';
        // return (new Response($data, 201))
        //     ->header('Content-Type', 'application/json');
        return response($data, 201);
    }
}
