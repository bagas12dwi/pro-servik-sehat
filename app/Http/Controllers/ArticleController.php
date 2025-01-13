<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Article::orderBy('created_at', 'DESC');

        // Apply search filter
        if ($request->has('searchorders') && $request->searchorders) {
            $query->where('name', 'like', '%' . $request->searchorders . '%')
                ->orWhere('title', 'like', '%' . $request->searchorders . '%');
        }

        // Apply year filter
        if ($request->has('year') && $request->year) {
            $query->whereYear('created_at', $request->year);
        }

        // Fetch distinct years for filtering
        $years = Article::selectRaw('YEAR(created_at) as year')
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year');

        $articles = $query->paginate(10);


        return view('admin.pages.article.index', [
            'title' => 'Artikel',
            'articles' => $articles,
            'years' => $years
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.article.create', [
            'title' => 'Artikel',
            'action' => 'create'
        ]);
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;

            // Store file
            $request->file('file')->storeAs('uploads', $filenameToStore);

            // Generate public URL
            $path = asset('storage/uploads/' . $filenameToStore);

            // Return JSON response
            return response()->json(['url' => $path], 200);
        }

        return response()->json(['error' => 'File not uploaded'], 400);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'content' => 'required',
            'thumbnails' => 'required'
        ]);

        $validatedData['slug'] = strtolower(str_replace(' ', '-', $validatedData['title']));

        if ($request->hasFile('thumbnails')) {
            $validatedData['thumbnails'] = $request->file('thumbnails')->store('artikel');
        }

        Article::create($validatedData);

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $artikel)
    {
        return view('admin.pages.article.create', [
            'title' => 'Artikel',
            'action' => 'edit',
            'article' => $artikel
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $artikel)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'content' => 'required',
            'thumbnails' => 'nullable'
        ]);

        $validatedData['slug'] = strtolower(str_replace(' ', '-', $validatedData['title']));

        if ($request->hasFile('thumbnails')) {
            Storage::delete($request->input('thumbnails_old'));
            $validatedData['thumbnails'] = $request->file('thumbnails')->store('artikel');
        }

        Article::where('id', $artikel->id)->update($validatedData);
        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $artikel)
    {
        Storage::delete($artikel->thumbnails);
        Article::destroy($artikel->id);
        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil dihapus!');
    }

    public function showArticle(Article $artikel)
    {
        return view('user.artikel.show', [
            'title' => $artikel->title,
            'article' => $artikel
        ]);
    }
}
