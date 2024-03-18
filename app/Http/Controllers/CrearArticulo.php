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


   public function update($id, Request $request)
   {
    try{

        $request->validate([
            'content' => ['required', 'string', 'max:255'],
        ],);



        $article = Articles::find($id);

        if(!$article){
            return redirect()->back()->with('error', 'No s\'ha trobat l\'article');
        }

        if($article->usuari != auth()->id()){
            return redirect()->back()->with('error', 'No tens permisos per a editar aquest article');
        }

        $article->update([
            
            'descripcio' => $request->content,
        ]);

        //RouteServiceProvider es una classe que ens permet redirigir a una ruta amb el nom que li passem
        return redirect()->route('home')->with('success', 'Article actualitzat correctament');
        
        // return view('home')->with('success', 'Article actualitzat correctament');      
    }catch(\Exception $e){
        return redirect()->route('home')->with('error', 'Article actualitzat malament'.$e->getMessage());
        //   return view('home')->with('error', $e->getMessage());
    }

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