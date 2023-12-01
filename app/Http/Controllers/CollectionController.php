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
                description
                productsCount
                }
            }
            }
        }
        QUERY;
        
        $shop = Auth::user();
        $data = $shop->api()->graph($query);
        $collections   = $data['body']['data']['collections']['edges'];
        // dd($collections);
        return view('collections', compact('collections'));
    }
}
