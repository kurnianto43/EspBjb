<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use Image;

class UserController extends Controller
{
    public function profile()
     {
          return view('esp.user.admin.profile', array('user' => Auth::user()), compact('roles'));
     }

     public function profileSet()
     {
      	return view('esp.user.admin.profileset', array('user' => Auth::user()), compact('roles'));    
     }

     public function update_avatar(Request $request)
     {
		if($request->hasFile('avatar'))
		{
			$avatar = $request->file('avatar');
			$filename = time() . '.' . $avatar->getClientOriginalExtension();			
				Image::make($avatar)->resize(300,300)->save( public_path('images/uploads/avatar/' . $filename ));

				$user = Auth::user();
				$user -> avatar = $filename;
				$user -> save();
		}

			return view('esp.user.admin.profileset', array('user' => Auth::user()));     	
     }
}
