<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin.article', compact('articles'));
    }

    public function create()
    {
        return view('admin.article');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'     => 'required',
            'content'   => 'required'
        ]);

        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();

        $request->image->move(public_path('articles'), $input['image']);


        $input['title'] = $request->title;
        $input['content'] = $request->content;

        $article = Article::create($input);

        if($article){
            //redirect dengan pesan sukses
            return redirect()->route('article.create')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('article.create')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Article $article, $id)
    {
        $article = Article::findOrFail($id);

        return view('admin.UpdateArticle', compact('article'));
    }


    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //     'title'     => 'required',
        //     'content'   => 'required'
        // ]);

        // //get data Blog by ID
        // $article = Article::findOrFail($article->id);

        // if($request->file('image') == "") {

        //     $article->update([
        //         'title'     => $request->title,
        //         'content'   => $request->content
        //     ]);

        // } else {

        //     $input['image'] = time().'.'.$request->image->getClientOriginalExtension();

        //     $request->image->move(public_path('articles'), $input['image']);

        //     $article->update([
        //         'image'     => $request->image,
        //         'title'     => $request->title,
        //         'content'   => $request->content
        //     ]);

        // }

        // if($article){
        //     //redirect dengan pesan sukses
        //     return redirect()->route('article.get')->with(['success' => 'Data Berhasil Diupdate!']);
        // }else{
        //     //redirect dengan pesan error
        //     return redirect()->route('article.get')->with(['error' => 'Data Gagal Diupdate!']);
        // }

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);

        if($request['image'] == "")
        {
            $article = Article::find($id);

            $article->title = $request->title;
            $article->content = $request->content;

            $article->save();

            return redirect()->route('article.get');
        } else {
            $input['image'] = time().'.'.$request->image->getClientOriginalExtension();

            $request->image->move(public_path('articles'), $input['image']);

            $input['title'] = $request->title;
            $input['content'] = $request->content;

            $article = Article::findOrFail($id);

            $article->update($input);

            return redirect()->route('article.get');
        }

        // return dd($request['title']);
    }

    public function delete(Article $article, $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('article.get');
    }
}
