<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function Users()
    {
       //Session::put('lang','pt');

        // echo Session::get('idlang');

        var_dump(Session::all());
        $user=User::where('id',1)->first();
        $user->tit=$user->{'tit_'.Session::get('idlang')};


        $nome[]=array( 'nome'=>'Bruno') ;
        $nome[]=array( 'nome'=>'Vieira') ;
        return view('Users', compact(['nome', 'user']));

    }
}
