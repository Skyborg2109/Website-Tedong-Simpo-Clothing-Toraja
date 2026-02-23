<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        // Since we process orders via WhatsApp, this might be manual entry or history.
        // For now, we'll just return the view.
        return view('admin.orders.index');
    }
}
