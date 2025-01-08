<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    // Display the gallery
    public function index()
    {
        $galleries = Gallery::all();  // Get all gallery records
        return view('gallery.index', compact('galleries'));
    }

    // Store a new gallery item
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'description' => 'required|string',
        ]);

        $imagePath = $request->file('image')->store('gallery_images', 'public'); // Store image in storage/app/public/gallery_images

        Gallery::create([
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('gallery.index');
    }
}
