<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    } public function home()
    {
        if(!auth()->check()){//ตรวจสอบว่าถ้าไม่มีการ login ให้ไปหน้า login
            return redirect('login');
        }
        //.$this->middleware('auth');
        return view('home');
    }
}
