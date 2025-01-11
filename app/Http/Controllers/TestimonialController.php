<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.pages.testimoni.index', [
            'title' => 'Testimoni',
            'testimonials' => $testimonials, // This is correct
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.testimoni.create', [
            'title' => 'Testimoni',
            'action' => 'create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'img_path' => 'nullable',
            'content' => 'required',
            'testimonial_date' => 'required'
        ]);

        if ($request->hasFile('img_path')) {
            $validatedData['img_path'] = $request->file('img_path')->store('testimoni');
        }

        Testimonial::create($validatedData);

        return redirect()->route('admin.testimoni.index')->with('success', 'Testimoni Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimoni)
    {
        return view('admin.pages.testimoni.create', [
            'action' => 'edit',
            'title' => 'Testimoni',
            'testimoni' => $testimoni
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimoni)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'img_path' => 'nullable',
            'content' => 'required',
            'testimonial_date' => 'required'
        ]);

        if ($request->hasFile('img_path')) {
            Storage::delete($request->input('img_path_old'));
            $validatedData['img_path'] = $request->file('img_path')->store('testimoni');
        }

        Testimonial::where('id', $testimoni->id)->update($validatedData);

        return redirect()->route('admin.testimoni.index')->with('success', 'Testimoni Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimoni)
    {
        Storage::delete($testimoni->img_path);
        Testimonial::destroy($testimoni->id);
        return redirect()->route('admin.testimoni.index')->with('success', 'Testimoni Berhasil Dihapus!');
    }
}
