<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function home()
    {
        // show a few latest products on homepage
        $latestPerfumes = Product::where('category', 'perfume')->latest()->take(4)->get();
        $latestThawbs   = Product::where('category', 'thawb')->latest()->take(4)->get();

        return view('shop.home', compact('latestPerfumes', 'latestThawbs'));
    }

    public function index(Request $request)
    {
        $category = $request->query('category'); // perfume, thawb, or null
        $search   = $request->query('search');

        $query = Product::query();

        if ($category && in_array($category, ['perfume', 'thawb'])) {
            $query->where('category', $category);
        }

        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        $products = $query->latest()->paginate(12)->withQueryString();

        return view('shop.index', compact('products', 'category', 'search'));
    }

    public function show(Product $product)
    {
        return view('shop.show', compact('product'));
    }
}
