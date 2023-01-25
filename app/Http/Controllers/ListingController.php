<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // Show all listings
    public function index()
    {
        return view('listings.index', ['listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)]);
    }

    // Show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', ['listing' => $listing]);
    }

    public function create()
    {
        return view('listings.create');
    }

    public function store(Request $request)
    {
        $formData = $request->validate([
            'company' => ['required', Rule::unique('listings', 'company')],
            'title' => 'required',
            'location' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
            'website' => 'required',
        ]);

        if($request->hasFile('logo')){
            $formData['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formData['user_id'] = auth()->id();

        Listing::create($formData);
        return redirect('/')->with('message', 'Listing created');
    }

    public function edit(Listing $listing)
    {
        if($listing->user_id != auth()->id()) {
            abort('403', 'Oops! This is not your listing :p');
        }
        return view('listings.edit', ['listing' => $listing]);
    }

    public function update(Request $request, Listing $listing)
    {

        if($listing->user_id != auth()->id()) {
            abort('403', 'Oops! This is not your listing :p');
        }

        $formData = $request->validate([
            'company' => 'required',
            'title' => 'required',
            'location' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
            'website' => 'required',
        ]);

        if($request->hasFile('logo')){
            $formData['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formData);
        return back()->with('message', 'Listing updated successfully.');
    }
    
    public function destroy(Listing $listing)
    {
        if($listing->user_id != auth()->id()) {
            abort('403', 'Oops! This is not your listing :p');
        }

        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully.');
    }

    public function manage()
    {
        return view('listings.manage', ['listings' =>  User::find(auth()->id())->listings]);
    }

}

