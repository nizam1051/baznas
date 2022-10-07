<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\CategoryPost;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;


class AdminPostController extends Controller
{
    public function listPost($category)
    {
        $category_name = ucwords(str_replace('-', ' ', $category));
        $post = Post::Join('category_post', 'category_post.id', '=', 'post.category_id')->where('name', $category_name)->select('post.*', 'category_post.name')->get();
        return view('admin.post.index', compact('post', 'category_name'));
    }

    public function editPost($id)
    {
        $post = Post::find($id);
        return view('admin.post.edit', compact('post'));
    }

    public function createPost()
    {
        $category = CategoryPost::all();
        return view('admin.post.add', compact('category'));
    }

    public function storePost(Request $request)
    {
        $validated = $request->validate(
            [
                'title' => 'required',
                'category' => 'required',
                'content' => 'required',
                'image' => 'required|mimes:jpg,jpeg,png|max:10240',
            ]
        );

        $gambar = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('uploads/post'), $name_gen);
        $last_img = 'uploads/post/' . $name_gen;

        $category_name = CategoryPost::find($request->category)->select('name');
        $slug_category = ucwords(str_replace('-', ' ', $category_name));

        Post::insert(
            [
                'title' => $request->title,
                'author' => 'Admin',
                'content' => $request->content,
                'category_id' => $request->category,
                'image' => $last_img,
                'created_at' => Carbon::now()
            ]
        );

        return redirect('/admin/post/' . $slug_category)->with('success', 'Post berhasil ditambahkan');
    }
}
