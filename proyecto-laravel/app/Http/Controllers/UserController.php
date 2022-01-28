<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\User;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index($search = null){
        
        if(!empty($search)){
            $users = User::where('nick','LIKE','%'.$search.'%')
                    ->orwhere('name','LIKE','%'.$search.'%')
                    ->orwhere('surname','LIKE','%'.$search.'%')
                    ->orderBy('id', 'desc')
                    ->paginate(5);
            return view('user.index',[
                'users' => $users
            ]);
        }else{
            $users = User::orderBy('id', 'desc')->paginate(5);
            return view('user.index',[
                'users' => $users
            ]);
        }
    }
    
    public function config(){
        return view('user.config');
    }
    
    public function update(Request $request) {
        
        
        //Conseguir al usuario identificado
        $user =\Auth::user();
        $id = $user->id;
        
        //Validación del formulario
        $validate = $this->validate($request,[
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'nick' => 'required|string|max:255|unique:users,nick,'.$id,
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
        ]);
        
        //Recoger los datos del formulario
        $name = $request->input('name');
        $surname = $request->input('surname');
        $nick = $request->input('nick');
        $email = $request->input('email');
        
        //Asignar nuevos valores al objeto del usuario
        $user->name = $name;
        $user->surname = $surname;
        $user->nick = $nick;
        $user->email = $email;
        
        //Subir imagen
        $image_path = $request->file('image_path');
        if($image_path){
            //Poner nombre único
            $image_path_name = time().$image_path->getClientOriginalName();
            
            //Guardar en la carpeta storage (storage/app/users)
            Storage::disk('users')->put($image_path_name, File::get($image_path));
            
            //Seteo el nombre de la imagen en el objeto
            $user->image = $image_path_name;
        }
        
        //Ejecutar consulta y cabios en la base de datos
        $user->update();
        return redirect()->route('config')
                ->with(['message' => 'Usuario actualizado Correctamente']);
    }
    public function passwordUpdate(Request $request) {
        //Conseguir al usuario identificado
        $user =\Auth::user();
        $id = $user->id;
        
        //Validación del formulario
        $validate = $this->validate($request,[
            'password' => 'required|string|min:6|confirmed',
        ]);
        
        //Recoger los datos del formulario
        $password = Hash::make($request->input('password'));
        
        //Asignar nuevos valores al objeto del usuario
        $user->password = $password;
        
        //Ejecutar consulta y cabios en la base de datos
        $user->update();
        return redirect()->route('config')
                ->with(['message' => 'Usuario actualizado Correctamente']);
    }
    
    public function getImage($filename){
        $file = Storage::disk('users')->get($filename);
        return new Response($file,200);
    }
    
    public function profile($id){
        Carbon::setLocale('es');
        $user = User::find($id);
        
        return view('user.profile', [
            'user' => $user
        ]);
    }
    
    
}
