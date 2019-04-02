<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
class CommentController extends Controller
{


    public function list(){
       /* $commenti = Comment::OrderBy('id','DESC')->get();


        return response()->json(
            $commenti->toArray()
            );*/

            return view('welcome')->with('comments',Comment::all());
    }
    
    public function addComment(Request $request){
          
        $this->validate($request,[
            "username"    => "required",
            "text"  => "required",
            "email"  => "required",
            "homepage" => "present",
        ]);

        $data = $request->all();
        $check = Comment::create($data);
        
        $arr = array('msg' => 'Something goes to wrong. Please try again lator', 'status' => false);
        if($check){ 
        $arr = array('msg' => 'Successfully submit form using ajax', 'status' => true);
        }
        return Response()->json($arr);




    }
}
