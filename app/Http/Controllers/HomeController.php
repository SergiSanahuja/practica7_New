<?php

namespace App\Http\Controllers;
use App\Models\Articles;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
        $articles = DB::table('articles')->simplePaginate(5);
        return view('home', compact('articles'));
    }

    public function show($id){

        // $articles = Articler::findorFail($id);
        if (Articles::findorFail($id)->usuari != auth()->id()) {
            return redirect('home');
        }

        return view('porfoli.show', ['article'=> Articles::findorFail($id)]);
    }


}
