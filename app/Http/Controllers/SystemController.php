<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function H(){
    	return view('H');
    }
    public function P(){
    	return view('P');
    }
    public function I(){
    	return view('I');
    }
   

    public function L(){
        return view('L');
    }
    public function insertData( Request $request){
        $username=$request->input('username');
        $password=$request->input('password');

       DB::INSERT("INSERT into login(username,password)VALUES(?,?)", [$username,$password]);
            return view('H');
    }


    public function R(){
            return view('R');
        }

    public function insertDataR(Request $request){
        
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $username=$request->input('username');
        $password=$request->input('password');
        
        DB::INSERT("INSERT into user_laravel(firstname,lastname,username,password)VALUES(?,?,?,?)", [$firstname,$lastname,$username,$password]);
        
        return view('H');

    }
}
