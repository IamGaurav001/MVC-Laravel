<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function displayForm(){
        return view('MyForm');
    }


    public function submitForm(Request $request){

        //validation of form via in-built method
        $request->validate([
            'name' => 'required | min:2 | max:10',
            'email' => 'required | email',
            'phone' => 'required | numeric',
        ]);

        //request retrival methods 1-basic way(best way)
        // $name = $request->name;
        // $email = $request->email;
        // $phone = $request->phone;

        //2nd Method using input field
        // $name = $request->input('name');
        // $email = $request->input('email');
        // $phone = $request->input('phone');  

        //3rd Method using all() method
        $data = $request->all();

        return "The name is ".($name ?? "Not provided")."<br>Email is ".($email ?? "Not provided")."<br>Phone number is ".($phone ?? "Not provided");
    }
}
