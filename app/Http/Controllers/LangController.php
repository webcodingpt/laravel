<?php

namespace App\Http\Controllers;

use App\Models\lang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

class LangController extends Controller
{
    public function validaLang($locale)
    {
        if (in_array($locale, ['en', 'es', 'fr', 'it', 'pt'])) {
            return true;
        }else{
            return false;
        }
    }

    public function indexc($locale)
    {
       if($this->validaLang($locale)==true){
           App::setLocale($locale);
           session()->put('locale', $locale);
           return redirect()->back();
       }
        else{
            App::setLocale('pt');
            session()->put('locale', 'pt');
            return redirect()->route('home');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale)
    {
        $lang=lang::where('lang',$locale)->first();


        if($this->validaLang($locale)==true){
            App::setLocale($locale);
            session()->put('locale', $locale);
            session()->put('idlang', $lang->codLang);
            return redirect()->back();
        }
        else{
            App::setLocale('pt');
            session()->put('locale', 'pt');
            session()->put('idlang', 1);
            return redirect()->route('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($locale)
    {
        $lang=lang::where('lang',$locale)->first();
        dd($lang);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
