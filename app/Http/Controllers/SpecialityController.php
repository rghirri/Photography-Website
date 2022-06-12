<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speciality;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.speciality.index')->with('specialities', Speciality::all()); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.speciality.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
       //dd(request()->all());

         $imageOne = $request->imageone->store('Speciality');
         $imageTwo = $request->imagetwo->store('Speciality');
         $imageThree = $request->imagethree->store('Speciality');   
        //dd($imageThree);

         Speciality::create([

            'title'          => $request->title,
            'content'        => $request->content,
            'imageone'       => $imageOne,
            'one'            => $request->one,
            'onedetails'     => $request->onedetails,
            'imagetwo'       => $imageTwo,
            'two'            => $request->two,
            'twodetails'     => $request->twodetails,
            'imagethree'     => $imageThree,
            'three'          => $request->three,
            'threedetails'   => $request->threedetails
            
        ]);

        //dd($slider);

        session()->flash('success', 'Speciality created successfully.');
        // Redirect user
        return redirect(route('speciality.index'));
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
        //
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
        //
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