<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    public function user()
    {
        $articles = Article::with('category')->get();
        $category = Category::all();
        return view('user',['articles'=>$articles,'category'=>$category]);
    }
    public function index()
    {
        $articles = Article::with('category')->get();
        $category = Category::all();
        $category2 = Category::all();
        return view('addArticleForm', ['articles' => $articles, 'category' => $category, 'category2' => $category2]);
    }
    public function store(Request $request)
    {
       $articles = new Article;
       $articles->title = $request->input('title');
       $articles->article = $request->input('article');
       $articles->category_id = $request->input('category');

       $articles->save();
       return redirect('/')->with('Message', 'Artikel berhasil disimpan!!');
    }
    public function destroy($id=0)
    {
        $articles = Article::find($id);
        $articles->delete();

        return redirect('/')->with('Message', 'Artikel berhasil dihapus!!');
    }
    public function update(Request $request)
    {
        $id = $request->input('id');
            
        $articles = Article::find($id);
        $articles->title = $request->input('title');
        $articles->article = $request->input('article');
        $articles->category_id = $request->input('category');

        $articles->save();

        return redirect('/')->with('Message', 'Artikel berhasil diubah!!');
    }
    public function search(Request $request)
	{
		$search = $request->search; 
		$articles = DB::table('articles')
		->where('category_id','like',"%".$search."%")
		->paginate();
		return view('user',['articles' => $articles]);
 
	}
    public function show($id)
    {
        $articles = Article::where('id', $id)->with('category')->first();
        $category = Category::all();
        return view('show',['articles'=>$articles,'category'=>$category]);
    }
}