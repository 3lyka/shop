<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
	public function show($cat, $alias)
	{
		$item = Product::where('alias', $alias)->first();

		return view('product.show', [
			'item' => $item
		]);
	}
	public function showCategory($cat_alias)
	{	

		$cat = Category::where('alias', $cat_alias)->first();
		return view('categories.index', [
			'cat' => $cat
		]);
	}
}
