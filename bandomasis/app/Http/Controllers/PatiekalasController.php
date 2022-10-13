<?php

namespace App\Http\Controllers;

use App\Models\Patiekalas;
use App\Models\Category;
use Illuminate\Http\Request;


class PatiekalasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('patiekalas.index', [
        'Patiekalai' => Patiekalas::orderBy('updated_at', 'desc')->paginate(5),
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patiekalas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request;  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:10',
            'price' => 'required|numeric|min:1|max:100',
            'photo.*' => 'sometimes|required|mimes:jpg'
        ],
        [
            'title.required' => 'nėra title',
            'title.min' => 'Taitlas per trumpas',
            'title.max' => 'Taitlas per ilgas',
            'price.required' => 'nėra kainos',
        ]);

        Patiekalas::create([
            'title' => $request->title,
            'price' => $request->price,
        ])->addImages($request->file('photo'));

        return redirect()->route('m_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patiekalas  $patiekalas
     * @return \Illuminate\Http\Response
     */
    public function show(Patiekalas $patiekalas)
    {
        return view('patiekalas.show', [
            'patiekalas' => $patiekalas,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patiekalas  $patiekalas
     * @return \Illuminate\Http\Response
     */
    public function edit(Patiekalas $patiekalas)
    {
        return view('patiekalas.edit', [
            'patiekalas' => $patiekalas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request;  $request
     * @param  \App\Models\Patiekalas  $patiekalas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patiekalas $patiekalas)
    {

        $request->validate([
            'title' => 'required|min:3|max:10',
            'price' => 'required|numeric|min:1|max:100',
            'photo.*' => 'sometimes|required|mimes:jpg'
        ]);

        $patiekalas->update([
            'title' => $request->title,
            'price' => $request->price,
        ]);
        $patiekalas
        ->removeImages($request->delete_photo)
        ->addImages($request->file('photo'));

        return redirect()->route('m_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patiekalas  $patiekalas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patiekalas $patiekalas)
    {
        if ($patiekalas->getPhotos()->count()) {
            $delIds = $patiekalas->getPhotos()->pluck('id')->all();
            $patiekalas->removeImages($delIds);
        }
        $title = $patiekalas->title;
        $patiekalas->delete();
        return redirect()->route('m_index')->with('ok', "$title Gone!");
    }
}