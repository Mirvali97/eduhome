<?php

namespace App\Http\Controllers;

use App\Address;

use App\Slider;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class BaseController extends Controller
{
    public function address(){
        $add = Address::all()->take(1);
        $sliders = Slider::latest()->get();
        return view('welcome',compact('add','sliders'));
    }
    public function SinglePost($id){
        $sld =  Slider::where('id', $id)->first();
        return view('single', compact('sld'));
    }
    public function posts(){
        $posts = Post::with('user')->where('status','active')->get();
        if (empty($posts)){
            return redirect('/');
        }
        return view('blog', compact('posts'));
    }

    public function PostRead($id){
        $post = Post::with('user')->where('id', $id)->first();
        $views = Post::where('id', $id)->first();
        $views->increment('views_count', + 1);
        if (empty($post)){
            return redirect('/');
        }
        return view('read_post', compact('views','post'));
    }
}
