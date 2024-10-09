<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class Homecontroller extends Controller
{

    public function index(){
        $data["doctors"] = Doctor::get();
        return view('dashboard',$data);
    }
    public function appointment(){
        $events = [
            [
                'title' => 'Event 1',
                'start' => '2024-10-10 10:00:00',
                'end' => '2024-10-10 12:00:00',
            ],
            [
                'title' => 'Event 2',
                'start' => '2024-10-11 14:00:00',
                'end' => '2024-10-11 16:00:00',
            ],
            [
                'title' => 'Event 3',
                'start' => '2024-10-12 09:00:00',
                'end' => '2024-10-12 11:00:00',
            ],
        ];
        
        return view('appointment-date',compact('events'));
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
