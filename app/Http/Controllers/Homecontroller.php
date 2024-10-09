<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class Homecontroller extends Controller
{

    public function index(){
        return view('dashboard');
    }
    public function test(){
        //$post = Post::find(4);
        //$post->tags()->detach(1);
        // foreach($post->tags as $item){
        //     echo $item->pivot;
        // }
        return view("welcome");
    }
    public function testPost(Request $request){

        $post = Post::find(5);
        $post->tags()->sync([1]);
        // $post = Post::create([
        //     "title"=>"this is post 1",
        // ]);
        // $tag = Tag::firstOrCreate(['tag' => $request->text]);

        // $post->tags()->attach($tag->id);
    }
}
