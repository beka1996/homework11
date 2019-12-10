<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;

use http\Env\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{

    public function index ()
    {
        return view('blog.index');

    }

    public function getInfo (BlogRequest $request)
    {
        $add = DB::table('blogDB')->insert([
            'title'=>$request->title,
            'second_title'=>$request->second_title,
            'author'=>$request->author,
            'description'=>$request->description
            ]);
        return view('blog.add');
    }

    public function list ()
    {
        $post = DB::table('blogDB')->paginate(5);
        return view('blog.list',['post'=>$post]);
    }

    public function article ($id){
        $post = DB::table('blogDB')->where('id',$id)->first();
        return view('blog.article',['info'=>$post]);

    }

    public function search (Request $request){

        $post = DB::table('blogDB')->where('name','LIKE','%'.$request->q.'%')->paginate(5);
        return view('blog.search',['post'=>$post]);

    }



}
