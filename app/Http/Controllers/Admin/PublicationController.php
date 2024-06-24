<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Publication;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $publications = Publication::latest()->paginate(10);
        return view('admin.publication.index', compact('publications'))->with('no', 1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('admin.publication.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul' => 'required|max:255',
            'penulis' => 'required|max:255',
            'jurnal' => 'max:255',
            'tahun' => 'required|numeric',
            'link' => 'max:255',
        ]);

        Publication::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'jurnal' => $request->jurnal,
            'tahun' => $request->tahun,
            'link' => $request->link,
        ]);

        return redirect()->route('publication.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id): View
    {
        $publications = Publication::findOrFail($id);
        return view('admin.publication.edit', compact('publications'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'judul' => 'required|max:255',
            'penulis' => 'required|max:255',
            'jurnal' => 'max:255',
            'tahun' => 'required|numeric',
            'link' => 'max:255',
        ]);

        Publication::findOrFail($id)->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'jurnal' => $request->jurnal,
            'tahun' => $request->tahun,
            'link' => $request->link,
        ]);

        return redirect()->route('publication.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): RedirectResponse
    {
        Publication::findOrFail($id)->delete();
        return redirect()->route('publication.index');
    }
}
