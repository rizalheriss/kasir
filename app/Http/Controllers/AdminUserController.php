<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'title'     => 'Manajemen User',
            'user'      => User::get(),
            'content'   => 'admin.user.index'
        ];
        return view('admin.layout.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = [
            'content'   => 'admin.user.create'
        ];
        return view('admin.layout.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'         => 'required',
            'email'        => 'required|email|unique:users,email',
            'password'     => 'required',
            're_password'  => 'same:password',
        ]);
    
        // Create a new user instance
        $user = new User();
    
        // Set user attributes
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
    
        // Save the user to the database
        $user->save();
    
        return redirect('/admin/user')->with('success', 'Data telah ditambahkan!!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = [
            'user'      => User::find($id),
            'content'   => 'admin.user.create'
        ];
        return view('admin.layout.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
    
        $data = $request->validate([
            'name'         => 'required',
            'email'        => 'required|email|unique:users,email,' . $user->id,
            //'password'   => 'required',
            're_password'  => 'same:password',
        ]);
    
        if ($request->password != '') {
            $data['password'] = Hash::make($request->password);
        } else {
            $data['password'] = $user->password;
        }
    
        $user->update($data);
    
        return redirect('/admin/user')->with('success', 'Data telah di edit!!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/user')->with('success', 'Data telah dihapus!!');
    }
}
