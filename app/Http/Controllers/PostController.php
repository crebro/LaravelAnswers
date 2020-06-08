<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Post::orderBy('id', 'desc')->paginate(5);

        return view('showall')->with('questions', $questions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //Validating the information given by the database
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
        ]
        );

        //Submitting the information to the database
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;

        if ($post->save()) {
            return redirect()->route('posts.show', $post->id);
        } else {
            return redirect()->route('posts.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question  = Post::findOrFail($id);
        return view('show')->with('post',$question);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $posttitle = $post->title;
        $postdesc = $post->description;
        return view('edit', ['posttitle'=>$posttitle, 'postdesc'=>$postdesc, 'post'=>$post ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $this->validate($request, [
            'title'=> 'required|max:255',
            'description' => 'required'
        ]

        );
        $post = Post::findOrFail($id);
        
        $post->title = $request->title;
        $post->description = $request->description;

        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
