<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        // We can show product images here as a gallery
        $products = Product::whereNotNull('main_image')->latest()->paginate(12);
        return view('admin.gallery.index', compact('products'));
    }
}
