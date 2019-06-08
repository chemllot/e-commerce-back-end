<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PostComments;

class PostsController extends Controller
{
    //
    public function index(){
        $postsComments = PostComments::orderBy('created_at','desc');
        return view('articles.index', compact('postsComments'));
    }

    public function create(){
        return view('posts.index');
    }

    public function store(Request $request){

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
