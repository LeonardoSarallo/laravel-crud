<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate();
        return view('users.index', compact('users'));
    }

    public function create()
    {
      return view('users.create');
    }


    public function store(Request $request)
    {
        $data = $request->all();

        $validateData = $request->validate([
          'name' => 'required',
          'lastname'=> 'required',
          'age' => 'required',
          'gender' => 'required'

        ]);

        $newUser = new User();
        $newUser->fill($data);
        // $newUser->name = $data['name'];
        // $newUser->lastname = $data['lastname'];
        // $newUser->age = $data['age'];
        // $newUser->gender = $data['gender'];

        $newUser->save();

        return redirect()->route('utenti.index');


    }


    public function show($id)
    {
        $user = User::find($id);

        if (empty($user)) {

          return abort(404);
        }
        return view('users.show', compact('user'));

    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
         $user = User::find($id);
         $data = $request->all();
         $user->update($data);
         return redirect()->back();
    }


    public function destroy($id)
    {
        $user =User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
