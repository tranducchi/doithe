<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sliders = Slider::all();
        return view('dashboard.slider.list', ['sliders'=>$sliders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.slider.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $slider = new Slider();
        $validatedData = $request->validate([
            'title' => 'required|unique:sliders|max:255',
            'description' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');
        if ($request->hasFile('img')) {
            $name = $request->file('img')->getClientOriginalName();
            $path = $request->file('img')->storeAs(
                'public/images', $name
            );
            $slider->img = $name;
        }
       $slider->save();
       return redirect('/dashboard/slider')->with('success', 'Add successfully ! ');
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
        $sliders = Slider::where('id', $id)->get();
        return view('dashboard.slider.edit', ['sliders'=>$sliders]);
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
        $slider = Slider::find($id);
        $validatedData = $request->validate([
            'title' => 'required|unique:sliders|max:255',
            'description' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');
        if ($request->hasFile('img')) {
            $name = $request->file('img')->getClientOriginalName();
            $path = $request->file('img')->storeAs(
                'public/images', $name
            );
            $slider->img = $name;
        }
       $slider->save();
       return redirect('/dashboard/slider')->with('success', 'Update successfully ! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
