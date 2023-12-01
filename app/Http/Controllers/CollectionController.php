<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class CollectionController extends Controller
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
        
        $shop = Auth::user();
        $data = $shop->api()->graph($query);
        $products   = $data['body']['data']['collections']['edges'];
        dd($products);
        // return view('welcome', compact('products'));
    }
}
