<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class TodoController extends Controller
{
    //
    
   
    public function show()
    {
        return view('todos.open',[
            'todos' => auth()->user()->todos()->get()
        ]);
    }

    public function view(Todo $id)
    {
        return view('todos.load', [
             'todos' => $id
          ]);
    }


    public function edit(Todo $id)
    {
        return view('todos.edit', [
             'todos' => $id
          ]);
    }


    public function new()
    {
        return view('todos.new_todo');
    }


    public function destroy(Todo $id)
    {
        if($id->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        };

        $id->delete();

        return redirect('/todos')->with('message', 'Successfully Deleted!!');
    }


    public function create(Request $request)
    {
      $formFields=$request->validate([
          'title'=>'required',
          'description'=>'required'
      ]);
      $formFields['user_id'] = auth()->id();
      Todo::create($formFields);
      return redirect('/todos')->with('message', 'Successfully created!!');
    }


    public function update(Request $request, Todo $id)
    {
        if($id->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        };

      $formFields=$request->validate([
          'title'=>'required',
          'description'=>'required'
      ]);
      $id->update($formFields);
      return redirect('/todos')->with('message', 'Successfully updated!!');
    }

   
   
}
