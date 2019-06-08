<?php

namespace App\Http\Controllers\Articles;

//use App\Comment;
//use Illuminate\Http\Request;
use App\Http\Responses\HttpResponse;
//use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;
//use App\PostComments;

class ArticlesController extends Controller
{
    //
    public function index(){
        $articles = Article::all()->toArray();
//        $postsComments = Comment::orderBy('created_at','desc')->get();
        $data = [
            'articles' => $articles
        ];
        return HttpResponse::success($data, 'Get successfully');
//        return view('articles.index', compact('articles', 'postsComments'));
    }

//    public function create(){
//        return view('articles.create');
//    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
        ]);

        $article = Article::create([
            'name' =>$request->name,
            'category' =>$request->category,
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('articles.index');
    }

//    public function edit($id)
//    {
//        $article = Article::findOrFail($id);
//        return view('articles.edit', compact('article'));
//    }
//
//    public function update(Request $request, $id)
//    {
//        $this->validate($request, [
//            'title' => 'required|max:50',
//        ]);

//        $article = Article::findOrFail($id);
//        $article->update([
//            'title' => $request->title,
//            'content' => $request->content,
//        ]);

//        return back();
//    }

//    public function destroy($id)
//    {
//        $article = Article::findOrFail($id);
//        $article->delete();
//        return back();
//    }
}
