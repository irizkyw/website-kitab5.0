<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;


class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('client.clientIndex', compact('clients'));
    }

    public function create()
    {
        return view('client.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:clients',
            'password' => 'required',
        ]);

        Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), 
        ]);

        return redirect()->route('client.index')->with('success', 'Client created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:clients,email,'.$id,
            'password' => 'required',
        ]);

        $client = Client::find($id);
        if ($client) {
            $client->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password), 
            ]);
            return redirect()->route('client.index')->with('success', 'Client updated successfully.');
        }
        return redirect()->route('client.index')->with('error', 'Client not found.');
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        if ($client) {
            $client->delete();
            return redirect()->route('client.index')->with('success', 'Client deleted successfully.');
        }
        return redirect()->route('client.index')->with('error', 'Client not found.');
    }

    public function show($id)
    {
        $client = Client::find($id);
        if ($client) {
            return view('client.show', compact('client'));
        }
        return redirect()->route('client.index')->with('error', 'Client not found.');
    }

    public function edit($id)
    {
        $client = Client::find($id);
        if ($client) {
            return view('client.edit', compact('client'));
        }
        return redirect()->route('client.index')->with('error', 'Client not found.');
    }
}
