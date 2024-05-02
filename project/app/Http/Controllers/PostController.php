<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
   
    public function allData(){
        
        //return view('post',['data'=>Post::all()]);
        return view('welcome', ['data' => Post::all()]);
    }
    public function allDataAdmin(){
        
        $data = Post::all(); // Предположим, что ваши данные хранятся в модели YourModel
        return view('dashboard', compact('data'));
       
    }
    /*public function visibleData(){
        //$contact= new Contact;
        return view('messages',['data'=>Post::all()]);
    }
    public function invisibleData(){
        //$contact= new Contact;
        return view('messages',['data'=>Post::all()]);
    }*/
    public function showOneMessage($id){
        $post= new Post;
        return view('one-message',['data'=>$post->find($id)]);
    }
    public function updateMessage($id){
        $post= new Post;
        return view('update-post',['data'=>$post->find($id)]);

    }
    //id обязательно должен передаваться первым
    public function updateMessageSubmit($id, ContactRequest $reg ){
        $contact=Post::find($id);
        $contact->title =$reg->input('title');
        $contact->text_preview = $reg->input('text-preview');
      
        $contact->save();
        return redirect()->route('dashboard')->with('success','Сообщение было изменено');
    }
    public function deleteMessage($id){
        $contact=Post::find($id);
        $contact->delete();
        return redirect()->route('dashboard')->with('success','Сообщение успешно удалено');
    }

    public function visibleMessage($id){
        $contact=Post::find($id);
        $contact->visible = true;
        $contact->save();
        return redirect()->route('dashboard')->with('success','Пост опубликован');
    }
 
}
