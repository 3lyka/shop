<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
	public function show($category,$product_id)
	{
	$item = Product::where('product_id');
	return view('product.show', [
	'item' => $item
	]);
	}
}
