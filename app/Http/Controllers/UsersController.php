<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $users = users::all();
        return view('users.index', compact('users'));
    }
 
    public function create()
    {
        return view('users.create');
    }
 
    public function edit($id)
    {
        $user = users::find($id);
        return view('users.edit', compact('users'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = users::find($id);
        if($user->userType === 'admin'){
            return view('users.show', compact('users'));
        } else{
            return redirect()->route('/')->with('error', 'Unauthorized');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $user = User::find($id);

        if ($user->userType === 'admin') {
            return redirect()->route('users.index')->with('error', 'Unauthorized');
        } elseif ($user->userType === 'client') {
            if ($user->id != auth()->id()) {
                return redirect()->route('/')->with('error', 'Unauthorized');
            }

            $user->update($request->all());
            return redirect()->route('/')->with('success', 'Your account has been updated successfully');
        } else {
            return redirect()->route('/')->with('error', 'Unauthorized');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = auth()->user();

        if ($user->userType === 'admin') {
            $disableUser = User::find($id);
            if (!$disableUser) {
                return redirect()->route('users.index')->with('error', 'User not found');
            }
            $disableUser->update(['disable'=>1]);
            return redirect()->route('users.index')->with('success', 'User disabled successfully');
        } elseif ($user->userType === 'client') {
            $user->delete();
            return redirect()->route('/')->with('success', 'Your account has been deleted successfully');
        } else {
            return redirect()->route('/')->with('error', 'Unauthorized');
        }
    }

    public function showAllClient(){
        $user = auth()->user();
        if ($user->userType === 'admin') {
            $clients = User::where('userType', 'client')->get();

            return response()->json($clients);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
}
