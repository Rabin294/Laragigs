<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // Show all listings
    public function index(){

        return view('listings.index',[
            'heading' => 'Latest Listings',
            'listings'=> Listing::latest()->filter(request(['tag','search']))->paginate(6)
            //For simple pagination
            // 'listings'=> Listing::latest()->filter(request(['tag','search']))->simplePaginate(6)
            ]);
    }
    // Show single listing
    public function show(Listing $listing){
        return view('listings.show',[
            'listing'=> $listing
        ]);
      

    }
    //Show create form
    public function create(){
        return view ('listings.create');
    }

    //Store listing data
    public function store(Request $request){
        $formFields =$request->validate([
            'title'=>'required',
            'company'=>['required', Rule::unique('listings', 'company')],
            'location'=>'required',
            'website'=>'required',
            'tags'=>'required',
            'email'=>['required','email'],
            'description'=>'required'
            
    ]);

    Listing::create($formFields);

    return redirect('/')->with('message','Listing created successfully!');

    }
}
