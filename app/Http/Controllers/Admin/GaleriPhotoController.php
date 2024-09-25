<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Helpers\Category;
use Illuminate\Support\Facades\Auth;

class GaleriPhotoController extends Controller
{
public function index()
{
  return view('admin.galeri-photo.index', [
    'pageTitle' => 'Galeri-photo',
    'listPost' => Post::all(),
    'listCategory' => Category::categories
  ]);
}


public function create()
{
  // dd(Category::categories);
  return view('admin.galeri-photo.create', [
    'pageTitle'    => 'Create Galeri',
    'listCategory'  => Category::categories
  ]);
}

public function store(Request $request)
{
  $validated = $request -> validate([
    'title' => 'required',
    'category' => 'required',
    'description' => 'required',
  ],[
    'title.required' => 'Judul wajib diisi.',
    'category.required' => 'Kategori wajib dipilih.',
    'description.required' => 'Keterangan wajib diisi.',
  ]);
   $post = Post::create([
      'title' => $validated['title'],
      'category' => $validated['category'],
      'description' => $validated['description'],
      'user_id' => Auth::user()->id
    ]);
    return redirect(route('admin-galeri-photo', absolute: false));
    // dd($post);
    // return redirect();
}

public function edit(string $postId)
{
  $post = Post::findOrFail($postId);

  //mengembalikan ke halaman view admin
  return view('admin.galeri-photo.edit', [
    'pageTitle' => 'Edit Album', 
    'post'      => $post,
    'listCategory'  => Category::categories
  ]);
  // dd('mau edit galeri photo..', $post);
}
}
