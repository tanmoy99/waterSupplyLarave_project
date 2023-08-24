<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact; // Import the Contact model with the correct namespace

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Save the data to the database using the Contact model
        Contact::create($validatedData); // Adjust this line if needed

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    public function showFormDetails()
    {
        $formDetails = Contact::all(); // Or any other logic to retrieve form details

        return view('adminLogin', compact('formDetails'));
    }

}
