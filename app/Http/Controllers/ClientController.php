<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $clients = Client::all();
        return view('admin.clients.index', compact('clients'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('admin.clients.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        // Validate the form input.
        $this->validateWith([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,',
        ]);
        // Create a new user.
        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->save();
        // Redirect the user once they have successfully created a client.
        return redirect()->route('clients.index')->with('success', 'You have successfully created a new client account.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $client = Client::find($id);
        return view('admin.clients.show', compact('client'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $client = Client::find($id);
        return view('admin.clients.edit', compact('client'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        // Validate the form input.
        $this->validateWith([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,'.$id,
        ]);

        // Create a new user.
        $client = Client::find($id);
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->save();

        // Redirect the user once they have successfully created a client.
        return redirect()->route('clients.index')->with('success', 'You have successfully updated a clients account.');
    }
}
