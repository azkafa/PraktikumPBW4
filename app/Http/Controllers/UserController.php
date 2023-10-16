<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\DataTables\UserDataTable;

class UserController extends Controller
{
    // Nama    : Azka Faris Akbar
    // NIM     : 6706220020
    // Kelas   : D3IF-4603
    
    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('user.daftarPengguna');
    }

    public function showUser($username) {
        $user = User::where('username', $username)->firstOrFail();
        return view('user.infoPengguna', compact('user'));
    }

    public function create()
    {
    return view('user.registrasi');
    }

    public function store(Request $request)
    {
        
    }

    public function show()
    {
        
    }
}