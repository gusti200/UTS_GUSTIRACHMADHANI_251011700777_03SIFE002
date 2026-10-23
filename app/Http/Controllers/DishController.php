<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index(Request $request)
    {
        $region = $request->query('region');
        $regions = Dish::orderBy('origin_region')->pluck('origin_region')->unique();

        $dishes = Dish::when($region, fn ($q) => $q->where('origin_region', $region))
            ->orderBy('name')
            ->get();

        return view('dishes.index', compact('dishes', 'regions', 'region'));
    }

    public function show(Dish $dish)
    {
        $others = Dish::where('id', '!=', $dish->id)->inRandomOrder()->limit(3)->get();

        return view('dishes.show', compact('dish', 'others'));
    }
}
