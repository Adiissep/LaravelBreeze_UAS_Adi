<?php

namespace App\Http\Controllers;
use App\Models\Article as ModelsArticle;
use App\Models\Companies as ModelsCompanies;
// use App\Models\Article;
use illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class ArticleController extends Controller
{

    public function index()
    {
        $articles = ModelsArticle::when(request('query'), function ($q) {
            return $q->where('title', 'like', '%' . request('query') . '%');
        })
            ->paginate(5);
        return view('articles.index', compact('articles'));

        $post = ModelsArticle::with('user')->get();
        return view('dashboard', ['dashboard' => $post]);


    }

    public function create()
    {
        return view('articles.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required | unique:articles',
            'content' => 'nullable | min:10', //boleh kosong tapi min 10 huruf
            'cover_image' => 'required | image | mimetypes:image/png,image/jpg,image/jpeg,image/webp,image/svg+xml,text/plain | max:2048' // 2MB
            
        ]);


        if ($request->cover_image) {
            $imgName = time() . '.' . $request->cover_image->extension(); // .png, .jpg
            $request->cover_image->storeAs('media/articles/', $imgName, 'public');
        }

        ModelsArticle::create([
            'title' => $request->title,
            'content' => $request->content,
            'cover_image' => $imgName,
            'user_id' => auth()->id(),
            
        ]);
        return redirect()->route('articles.index')->with('success', 'Article created successfully');
    }


    public function show()
    {
        $article = ModelsArticle::all();
        $company = ModelsCompanies::all();
        return view('layouts.uts-layout',compact('article','company'));
        // return view('layouts.uts-layout')->with('article', $article); //munculnya di articles/index
        
    }


    public function edit(ModelsArticle $article)
    {
        return view('articles.edit', compact('article'));
    }


    public function update(Request $request, ModelsArticle $article)
    {
        $request->validate([
            'title' => 'required | unique:articles,title,' . $article->id,
            'content' => 'nullable | min:10',
            'cover_image' => 'nullable | image | mimetypes:image/png,image/jpg,image/jpeg,image/webp,image/svg+xml,text/plain | max:2048' // 1MB
        ]);


        if ($request->cover_image) {
            // Delete old image
            Storage::disk('public')->delete('media/articles/' . $article->cover_image);

            $imgName = time() . '.' . $request->cover_image->extension(); // .png, .jpg
            $request->cover_image->storeAs('media/articles/', $imgName, 'public');
        }

        $article->update([
            'title' => $request->title,
            'content' => $request->content,
            'cover_image' => $request->cover_image ? $imgName : $article->cover_image,
        ]);

        return redirect()->route('articles.index')->with('success', 'Article updated successfully');
    }


    public function destroy(ModelsArticle $article)
    {
        $article->delete();
        Storage::disk('public')->delete('media/articles/' . $article->cover_image);

        return redirect()->route('articles.index')->with('success', 'Article deleted successfully');
    }
}
