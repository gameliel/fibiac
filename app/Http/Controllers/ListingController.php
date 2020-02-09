<?php

namespace App\Http\Controllers;

use App\listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listing = Listing::latest()->paginate(5);
        return view('listings.index',compact('listing'))
            ->with('i', (request()->input('page', 1)  -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listings.create');
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
            'title' => 'required|max:255',
            'status' => 'required',
            'type' => 'required',
            'price' => 'required',
            'area' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'gallery' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'description' => 'required',
        ]);

        Listing::create($request->all());
        return redirect()->route('listings.index')
            ->with('success','Listing created successfully.');

           }

    /**
     * Display the specified resource.
     *
     * @param  \App\listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function show(listing $listing)
    {
        return view('listings.show',compact('listing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function edit(listing $listing)
    {
        return view('listings.edit',compact('listing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, listing $listing)
    {
        $request->validate([
            'title' => 'required|max:255',
            'status' => 'required',
            'type' => 'required',
            'price' => 'required',
            'area' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'gallery' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'description' => 'required',
        ]);

        $listing->update($request->all());

        return redirect()->route('listings.index')->with('success', 'Listing updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy(listing $listing)
    {
        $listing->delete();

        return redirect()->route('listings.index')->with('success', 'Listing deleted successfully');
    }
}
