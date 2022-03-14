<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }
    public function index()
    {
        $posts = $this->postRepository->getAll();
        return view('post.list',compact('posts'));

    }


    public function create()
    {
        return view('post.create');
    }


    public function store(Request $request)
    {
        $data = $request->only('title','content','user_id');
        $this->postRepository->store($data);
    }


    public function show($id)
    {
        $posts =  $this->postRepository->getById($id);
        return view('post.detail',compact('posts'));
    }


    public function edit($id)
    {
        $posts = $this->postRepository->getById($id);
        return view('post.update',compact('posts'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->only('title','content','user_id');
        $this->postRepository->update($data,$id);
    }


    public function destroy($id)
    {
        $this->postRepository->deleteById($id);
        return redirect()->route('post.list');

    }
}
