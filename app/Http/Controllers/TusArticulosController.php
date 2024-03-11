<?php

namespace App\Http\Controllers;
use App\Models\Articles;
use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TusArticulosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $articles = Articles::where('usuari', auth()->id())->get();
       
        $articles = Articles::where('usuari', auth()->id())->simplePaginate(5);

        return view('TusArticulos', compact('articles'));
    }

    public function show($id){
        return $id;
    }


}
