<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Carbon\Carbon;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save(Request $request) {

        //Validación
        $validate = $this->validate($request,[
            'image_id' => 'integer|required',
            'content' =>'string|required'
        ]);
        
        //Recojer datos
        $user = \Auth::user();
        $image_id = $request->input('image_id');
        $content = $request->input('content');
        
        //Asigno valores a mi nuevo objeto
        $comment = new Comment();
        $comment->user_id = $user->id;
        $comment->image_id = $image_id;
        $comment->content = $content;
        
        $comment->save();
        
        //Redirección
        return redirect()->route('image.detail',['id' => $image_id])
                ->with([
                    'message' => 'Has publicado tu comentario correctamente'
                ]);
    }
    
    public function delete($id) {
        //conseguir datos del usuario logueado
        $user = \Auth::user();
        
        //Conseguir objeto del comentario
        $comment = Comment::find($id);
        
        //Comprobar si soy el dueño del comentario o de la publicación
        if($user && ($comment->user_id == $user->id) || $comment->image->user_id == $user->id){
            $comment->delete();
            return redirect()->route('image.detail',['id' => $comment->image->id])
                ->with([
                    'message' => 'Comentario eliminado correctamente'
                ]);
        }else{
            return redirect()->route('image.detail',['id' => $comment->image->id])
                ->with([
                    'meesage' => 'Tu comentario no se ha eliminado'
                ]);
        }
    }
    
}
