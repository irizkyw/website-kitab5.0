<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('admin.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required',
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), 
        ]);

        return redirect()->route('admin.index')->with('success', 'Admin created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email,'.$id,
            'password' => 'required',
        ]);

        $admin = Admin::find($id);
        if ($admin) {
            $admin->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password), 
            ]);
            return redirect()->route('admin.index')->with('success', 'Admin updated successfully.');
        }
        return redirect()->route('admin.index')->with('error', 'Admin not found.');
    }

    public function destroy($id)
    {
        $admin = Admin::find($id);
        if ($admin) {
            $admin->delete();
            return redirect()->route('admin.index')->with('success', 'Admin deleted successfully.');
        }
        return redirect()->route('admin.index')->with('error', 'Admin not found.');
    }

    public function show($id)
    {
        $admin = Admin::find($id);
        if ($admin) {
            return view('admin.show', compact('admin'));
        }
        return redirect()->route('admin.index')->with('error', 'Admin not found.');
    }

    public function edit($id)
    {
        $admin = Admin::find($id);
        if ($admin) {
            return view('admin.edit', compact('admin'));
        }
        return redirect()->route('admin.index')->with('error', 'Admin not found.');
    }
}
