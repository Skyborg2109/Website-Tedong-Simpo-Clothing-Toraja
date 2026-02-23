<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = \App\Models\Product::where('is_active', true)->latest()->take(6)->get();
    return view('home', compact('products'));
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/products', function (\Illuminate\Http\Request $request) {
    $query = \App\Models\Product::where('is_active', true);
    
    // Filter by Category
    if ($request->has('category') && $request->category != '') {
        $query->where('category', $request->category);
    }

    // Filter by Price Range
    if ($request->has('price_range') && $request->price_range != '') {
        $range = explode('-', $request->price_range);
        if (count($range) == 2) {
            $query->whereBetween('price', [$range[0], $range[1]]);
        } elseif ($request->price_range == '350000') {
            $query->where('price', '>', 350000);
        } elseif ($request->price_range == '0-150000') {
             $query->where('price', '<=', 150000);
        }
    }

    $products = $query->latest()->paginate(9)->withQueryString();
    return view('products.index', compact('products'));
})->name('products');

Route::get('/products/{id}', function ($id) {
    $product = \App\Models\Product::findOrFail($id);
    $relatedProducts = \App\Models\Product::where('category', $product->category)
        ->where('id', '!=', $id)
        ->take(4)
        ->get();
    return view('products.show', compact('product', 'relatedProducts'));
})->name('products.show');

Route::get('/testimonials', function () {
    return view('testimonials');
})->name('testimonials');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin Auth Routes
use App\Http\Controllers\Admin\Auth\AdminAuthController;

Route::get('/admin/login', [AdminAuthController::class, 'create'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'store']);
Route::post('/admin/logout', [AdminAuthController::class, 'destroy'])->name('admin.logout');

// Admin Routes
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        $totalProducts = \App\Models\Product::count();
        $recentProducts = \App\Models\Product::latest()->take(5)->get();
        return view('admin.dashboard', compact('totalProducts', 'recentProducts'));
    })->name('dashboard');

    Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
    Route::resource('orders', \App\Http\Controllers\Admin\OrderController::class);
    Route::resource('customers', \App\Http\Controllers\Admin\CustomerController::class);
    Route::resource('gallery', \App\Http\Controllers\Admin\GalleryController::class);
    Route::get('settings', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings.index');
    Route::post('settings', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
