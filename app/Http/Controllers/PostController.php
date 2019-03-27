<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::join('categories', 'categories.id', '=', 'posts.category')
            ->join('users','users.id','=','posts.author_id')
            ->get(['posts.*','categories.name','categories.icon','categories.color','users.username']);
        return view('blog', ['posts' => $posts]);
    }

    public function postView($id)
    {
        $post = Post::where('id', $id)->first();
        if (empty($post)) {
            abort(404, 'this Post not found');
        } else {
            return view('post', ['post' => $post]);
        }
    }

    public function createView()
    {
        $category = Category::all();

        return view('admin.createBlog',['category' => $category]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required',
            'category' => 'required'
        ]);

        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'category' => $request->input('category'),
            'author_id' => Auth::id()
        ]);
        return back()->with(['success' => 'your post was created with success']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $posts = Post::all();
        return view('admin.editBlog',['posts' => $posts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $category = Category::all();
        $post = Post::where('id',$id)->first();
        return view('admin.createBlog',['post' => $post,'category' => $category]);
    }

    public function setUpdate($id,Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required',
            'category' => 'required'
        ]);
        Post::where('id',$id)->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'category' => $request->input('category'),
        ]);
        return back()->with(['success' => 'yor post was updated with success']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id',$id)->delete();
        return back()->with(['success' => 'your post was deleted with success']);
    }
}
