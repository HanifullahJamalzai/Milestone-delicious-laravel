<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Food;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $foods = Food::all();
        $foods = Food::paginate(10);
        return view('admin.food.index', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.food.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:4',
            'price' => 'required',
            'category_id' => 'required',
            'photo' => 'required',
        ],
        ['name.required' => 'بدون نام بود لالا جان ', 'name.min' => 'نام کمتر از ۳ کرکتر بود لالا جان']
    );
        $food = new Food();
        $food->name = $request->name;
        $food->description = $request->description;
        $food->price = $request->price;
        $food->category_id = $request->category_id;

        if($request->hasFile('photo'))
        {
            // dd($request->photo);
            $fileName = 'food_'.date('YmdHis').'_'.rand(10, 10000).'.'.$request->photo->extension();
            // return $fileName;
            $request->photo->storeAs('/photo/food', $fileName, 'public');
            // Store to DB
            $food->photo = '/storage/photo/food/'.$fileName;
        }
        $food->save();
        session()->flash('success', 'You have Successfully added Food' );
        // Session::flash('success', 'You have Successfully added Food');

        return redirect('/food');
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
    public function edit(Food $food)
    {
        $categories = Category::all();
        return view('admin.food.edit', compact('food', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:4',
            'price' => 'required',
            'category_id' => 'required',
        ]);
        
        // $food->update($request->all());

        $data = $request->all();
        // $data['photo'] = 'alpha.jpg';
        // dd($data);
        if($request->hasFile('photo'))
        {
            @unlink(public_path().'/'.$food->photo);

            // dd($request->photo);
            $fileName = 'food_'.date('YmdHis').'_'.rand(10, 10000).'.'.$request->photo->extension();
            // return $fileName;
            $request->photo->storeAs('/photo/food', $fileName, 'public');
            // Store to DB
            $data['photo'] = '/storage/photo/food/'.$fileName;
        }

        $food->update($data);
        session()->flash('success', 'You have successfully updated food');
        return redirect()->route('food.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {

        $food->delete();
        // @unlink(public_path().'/'.$food->photo);
        // $food->delete();
        
        session()->flash('success', 'You have successfully updated food');
        return redirect()->route('food.index');
    }

    public function PermanentDelete($food)
    {
        $food = Food::onlyTrashed()->find($food);
        
        @unlink(public_path().'/'.$food->photo);
        $food->forceDelete();
        session()->flash('success', 'You have successfully updated food');
        return redirect()->route('food.index');
    }
    

    public function trash()
    {
        $foods = Food::onlyTrashed()->paginate(10);
        return view('admin.food.recycle', compact('foods'));
    }

    public function RestoreItem($food)
    {
        $food = Food::onlyTrashed()->find($food);
        $food->restore();

        session()->flash('success', 'You have successfully Restored food');
        return redirect()->route('food.index');
    }

    public function search(Request $request)
    {   
        $request->validate([
            'search' => 'required'
        ]);

        $foods = Food::where('name', 'LIKE', '%'.$request->search.'%')->paginate(10);

        // $foods = Food::paginate(10);
        return view('admin.food.index', compact('foods'));

    }
}
