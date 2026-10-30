<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index()       { return view('admin.dashboard'); }
    public function calendar()    { return view('admin.calendar'); }
    public function forms()       { return view('admin.forms'); }
    public function tables()      { return view('admin.tables'); }
    public function sweetalerts() { return view('admin.sweetalerts'); }
    public function login()       { return view('admin.login'); }
}