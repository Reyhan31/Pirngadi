<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class FiturProductDetailsController extends Controller
{
    public function index($id){
        $product = Product::find($id);
        return view('fiturproductdetails', compact("product"));
    }
}
