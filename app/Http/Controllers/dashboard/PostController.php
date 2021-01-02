<?php

namespace App\Http\Controllers\dashboard;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;
use App\PostImage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'rol.admin']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(10);
        return view('dashboard.post.index',[
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('id','title');
        return view('dashboard.post.create', ['post' => new Post(), 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostPost $request)
    {
        
        Post::create($request->validated());
        //$posts = Post::orderBy('created_at', 'DESC')->paginate(5);
        return back()->with('status', 'Post creado con éxito!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show',['post' => $post]);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //dd($post->image->image);
        $categories = Category::pluck('id','title');
        return view('dashboard.post.edit',['post' => $post, 'categories' => $categories]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostPost $request, Post $post)
    {
        $post->update($request->validated());
        return back()->with('status', 'Post actualizado con éxito!');
    }
    

    public function image(Request $request, Post $post)
    {
        
       $request->validate([
        'image' => 'required|mimes:jpeg,bmp,png,jpg|max:10240' 
       ]);

       $filename = uniqid() . "." .$request->image->extension();

       $request->image->move(public_path('img/images'), $filename);

       PostImage::create([
           'image' => $filename,
           'post_id' => $post->id
       ]);

       return back()->with('status', 'Imagen cargada con éxito!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete($post);
        //return back()->with('status', 'Post eliminado con éxito!');
        $posts = Post::orderBy('created_at', 'DESC')->paginate(10);
        return view('dashboard.post.index',[
            'posts' => $posts,
        ])->with('status', 'Post eliminado!');
    }
}
