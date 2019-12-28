<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Validation\Rule;
class UserController extends Controller
{

   public function index(Request $request){

	   	$key = $request->has('query') ? $request->get('query'):null;
	   	if($key){
	   		$users = User::where('name','LIKE','%'.$key.'%')
	   					   ->orWhere('email','LIKE','%'.$key.'%')
	   					   ->orWhere('address','LIKE','%'.$key.'%')
	   					   ->orWhere('phone','LIKE','%'.$key.'%')
	   					   ->orWhere('born','LIKE','%'.$key.'%')
	   					   ->orWhere('hobby','LIKE','%'.$key.'%')
	   					   ->paginate(10);
	   	} else {
	   		$users = User::paginate(10); 
	   	}
	   	
	   	return view('user.index',compact('users'));
   }


   public function create(){
   		
   		return view('user.create');
   }

   public function store(Request $request){
   		$request->validate([
	   	'name'=> 'required|string|min:5',
	   	'email'=> 'required|string|min:5|unique:users',
	   	'address'=> 'required|string',
	   	'born'=> 'required|date',
	   	'hobby'=> 'required|string',
	   	'phone'=> 'required|string',
	   	'password'=> 'required|string|confirmed',
	   
	   	]);
   		User::create($request->all());
   		return redirect()->route('user.index')->with('succses','Sucessfuly create new user');	
   }


   public function edit($id){
   	$user = User::findOrfail($id);
   	return view('user.edit',compact('user'));
   }

// untuk update user
   public function update(Request $request) {

   	$user = User::findOrFail($request->id);

   	$request->validate([
	   	'name'=> 'required|string|min:5',
	   	'email'=> [
	   			'required',
	   			'string',
	   			'min:5',
	   			Rule::unique('users')->ignore($user->id)
	   			],
	   	'address'=> 'required|string',
	   	'born'=> 'required|date',
	   	'hobby'=> 'required|string',
	   	'phone'=> 'required|string'
	   
	   	]);
   		if( $request->password ) {

   			$Request->validation( ['password' => 'require|string|confirmed'] );
   			$user->password = bcrypt($request);
   		}

   		$user->name = $request->name;
   		$user->email = $request->email;
   		$user->address = $request->address;
   		$user->born = $request->born;
   		$user->hobby = $request->hobby;
   		$user->phone = $request->phone;

   		$user->save();

   		return redirect()->route('user.index')->with('success','Succesfully updating user');
   }	

   	// untuk delete user
   public function delete(Request $request) {
   	$user = User::findOrFail($request->id);
   	$user->delete();
   	return redirect()->route('user.index')->withSuccess('Successfully Deleting user');
   }


}
