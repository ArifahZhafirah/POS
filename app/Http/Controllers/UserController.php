<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserController extends Controller
{
    public function index()
    {

        $user = UserModel::where('username', 'manager9')->firstOrFail();
        return view ('user', ['data' => $user]);
    }
}


//  $data = [
//             'level_id' => 2,
//             'username' => 'manager_tiga',
//             'nama' => 'Manager 3',
//             'password' => Hash::make('12345')
//         ];
//         UserModel::create($data);


// public function index()
    // {
    //     $data = [
    //         'nama' => 'Pelanggan Pertama',
    //     ];
    //     UserModel::where('username', 'customer-1')->update($data);
       
    //     $user = UserModel::all();
    //     return view('user', ['data' => $user]);
    // }


    // public function index()
    // {
    //     $data = [
    //     'username' => 'customer-1',
    //     'nama' => 'Pelanggan Pertama',
    //     'password' => Hash::make('12345'),
    //     'level_id' => 4
    // ];

    // DB::table('m_user')->insert($data);

    // $user = DB::table('m_user')->get();

    // return view('user', ['data' => $user]);
    // }
    // public function index()
    // {
    //     $user = UserModel::all();
    //     return view('user', ['data' => $user]);
    // }
    // public function profile($id, $name){
    //     return view('user.profile', compact('id', 'name'));
    // }

