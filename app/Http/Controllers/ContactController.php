<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;

class ContactController extends Controller
{
  public function store(Request $request)
  {
      $request->validate([
          'name' => 'required',
          'email' => 'required',
          'subject' => 'required|max:100',
          'message' => 'required|max:255',
      ]);

      Contact::create($request->all());
      return redirect()->route('contact')
          ->with('success','Listing created successfully.');


         }
}
