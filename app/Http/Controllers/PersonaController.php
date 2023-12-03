<?php

namespace App\Http\Controllers;
//incluimos Http
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     $serverapi = 'http://localhost:3000/';
    public function index()
    {
        $response = Http::get($serverapi.'personas/');
        //return $response->json();
        //return $response->ok();
        return view('personas')->with('ResulPersonas', json_decode($response,true));
    }

    
    public function GetPersona($cod_persona)
    {
        $response = Http::get('http://localhost:8080/personas/'.$cod_persona);
        return view('personas')->with('ResulPersonas', json_decode($response,true));
    }

}
