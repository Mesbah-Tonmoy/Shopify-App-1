<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index()
    {
        $query = <<<QUERY
        query {
            collections(first: 5) {
            edges {
                node {
                id
                title
                handle
                updatedAt
                productsCount
                sortOrder
                }
            }
            }
        }
        QUERY;

        // $req = Http::withHeader({
        //     'Content-Type': 
        // })
        $shop = Auth::user();
        $data = $shop->api()->graph($query);
        $products   = $data['body']['data'];
        dd($products);
        // return view('welcome', compact('products'));
    }
}
