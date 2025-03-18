<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'JDM Type-R Engine Cover',
                'price' => 299.99,
                'image' => 'https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?auto=format&fit=crop&q=80&w=600',
                'category' => 'Engine Parts',
                'condition' => 'Used - Excellent',
                'compatibility' => 'Honda Civic Type-R 2018-2023',
            ],
            // Add other products here
        ];

        $categories = [
            ['name' => 'Engine Parts', 'icon' => '<svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>'],
            // Add other categories here
        ];

        $selectedCategory = 'All';

        return view('layouts.home', compact('products', 'categories', 'selectedCategory'));
    }
}
