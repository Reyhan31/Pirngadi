<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class FiturProductController extends Controller
{
    public function index(){
        $product = Product::paginate(9);
        return view('fiturproduct', compact('product'));
    }

    public function filter(Request $request){
        // echo "<script>console.log('Debug Objects: " . $request->quantity . "' );</script>";
        
        return view('fiturproduct', compact('product'));
    }
}
