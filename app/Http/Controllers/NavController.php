<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class NavController extends Controller
{
    public function Beranda(){
        return view("Pages.Beranda",['key' => 'Beranda']);
    }
    public function SejarahFikom(){
        return view("Pages.SejarahFikom",['key' => 'Sejarah']);
    }
    public function Dosen(){
        return view("Pages.Dosen",['key' => 'Dosen']);
    }
    public function Users(){
        $users = User::all();
        return view("Pages.Users",['key' => 'Users' , 'users' => $users]);
    }
}
