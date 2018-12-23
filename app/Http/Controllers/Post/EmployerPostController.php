<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\posts as Post;

class EmployerPostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return $posts;
    }

    public function getAdd(){
        //return response()->json(['post' => 'hihi'], 200);
    }

    public function postAdd(Request $req) {
        // $this->validate($req,[],[]);
        // $post = new Post;
        // $post->Title=$req->txtTitle;
        // $post->Description=$req->txtDescription;
        // $post->requirement=$req->txtRequirement;
        // $post->Salary=$req->txtSalary;
        // $post->Amount_of_people=$req->txtAmount_of_people;
        // $post->Start_day=$req->dateStart_day;
        // $post->End_day=$req->dateEnd_day;
        // $post->save();
        // return response()->json(['post' => $post], 200);
        return response()->json(['add_post' => $req->name], 200);
    }

    public function getEdit($id) {
        $post = Post::find($id);
        return $post;
    }

    public function postEdit(Request $req) {
        return response()->json(['edit_post' => $req->name], 200);
    }

    public function getDelete($id) {
        $post = Post::find($id);
        if($post) {
            $page->id_deleted = true;
            $page->save();
        }
        else return response()->json(['edit_post' => $req->name], 200);
    }
}
