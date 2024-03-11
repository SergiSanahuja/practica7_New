<?php

namespace App\Http\Controllers;
use App\Models\Articles;
use App\Models\User;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use Dotenv\Exception\ValidationException;
use Illuminate\View\View;

use function Laravel\Prompts\alert;

class CrearArticulo extends Controller{

   
   public function create(): View
   {
       return view('create');
   }

   /**
    * Handle an incoming registration request.
    *
    * @throws \Illuminate\Validation\ValidationException
    */
   public function store(Request $request){
      try{
        $request->validate([
             'title' => ['required', 'string', 'max:255'],
             'content' => ['required', 'string', 'max:255'],
             


        ],[
            // Diferets missatges d'error per a cada validació
            'title.required' => 'El titol es obligatori',
            'title.max' => 'El titol es massa llarg',
            'title.min' => 'El titol ha de ser un text',
            'title.string' => 'El titol ha de ser un text',
            'content.required' => 'El contingut es obligatori',
          

        ]);
    
        $article = Articles::create([
             'Titul' => $request->title,
             'descripcio' => $request->content,
             'usuari' => auth()->id(),
        ]);
    
        event(new Registered($article));

        
        return redirect(RouteServiceProvider::HOME);
   }catch(\Exception $e){
       return redirect()->back()->with('error', $e->getMessage());
   }
   }
}