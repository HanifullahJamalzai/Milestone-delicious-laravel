<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Why_choose_us;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class WCUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Why_choose_us::all();
        // dd($data);
        return view('admin.wcu.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('Admin');

        return view('admin.wcu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('Admin');

        $request->validate([
            'title'       => 'required|min:4|max:255',
            'description' => 'required|min:5',
        ]);

        // dd($request->all());
        Why_choose_us::create([
            'title'  => $request->title,
            'description' => $request->description
        ]);
        // $wcu = new Why_choose_us();
        // $wcu->title = $request->title;
        // $wcu->description = $request->description;
        // $wcu->save();

        session()->flash('success', 'You have Successfully Added a WCU');

        return redirect()->route('admin.wcu');
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
    public function edit($id)
    {
        Gate::authorize('Admin');

        $data = Why_choose_us::findOrFail($id);
        // dd($data);

        return view('admin.wcu.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Gate::authorize('Admin');

        $request->validate([
            'title'       => 'required|min:4|max:255',
            'description' => 'required|min:5',
        ]);

        $oldRow = Why_choose_us::findOrFail($id);
        $oldRow->update(['title' => $request->title, 'description' => $request->description]);

        session()->flash('success', 'You have successfully updated the Row');
        return redirect()->route('admin.wcu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('Admin');

        Why_choose_us::find($id)->delete();
        session()->flash('success', 'You have Successfully Deleted a Category');
        return redirect()->route('admin.wcu');
    }
}
