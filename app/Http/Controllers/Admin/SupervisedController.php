<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Supervised;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SupervisedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $superviseds = Supervised::latest()->paginate(10);
        return view('admin.supervised.index', compact('superviseds'))->with('no', 1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('admin.supervised.create');
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
            'namamhs' => 'required|max:255',
            'topik' => 'required|max:255',
            'tahun' => 'required|numeric',
        ]);

        Supervised::create([
            'namamhs' => $request->namamhs,
            'topik' => $request->topik,
            'tahun' => $request->tahun,
        ]);

        return redirect()->route('supervised.index');
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
        $superviseds = Supervised::findOrFail($id);
        return view('admin.supervised.edit', compact('superviseds'));
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
            'namamhs' => 'required|max:255',
            'topik' => 'required|max:255',
            'tahun' => 'required|numeric',
        ]);

        Supervised::findOrFail($id)->update([
            'namamhs' => $request->namamhs,
            'topik' => $request->topik,
            'tahun' => $request->tahun,
        ]);

        return redirect()->route('supervised.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): RedirectResponse
    {
        Supervised::findOrFail($id)->delete();
        return redirect()->route('supervised.index');
    }
}
