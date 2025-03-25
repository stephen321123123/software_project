<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizations = Organization::all();
        return view('organizations.index', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organizations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|max:300',
            'url' => 'required',
            'organization_type' => 'required',
            'contact' => 'required',
            'email' => 'required'
        ]);

        if ($request->hasFile('image')) {

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/organizations'), $imageName);
        }

        Organization::create([
            'name' => $request->name,
            'image' => $imageName,
            'description' => $request->description,
            'url' => $request->url,
            'organization_type' => $request->organization_type,
            'contact' => $request->contact,
            'email' => $request->email,
            'created_at' => now(),
            'updated_at' => now()
        ]);
         return to_route('organizations.index')->with('success', 'Organization created successfully!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Organization $organization)
    {
        return view('organizations.show')->with('organization', $organization);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organization $organization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organization $organization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization)
    {
        //
    }
}
