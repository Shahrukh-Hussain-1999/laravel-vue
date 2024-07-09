<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Inertia\Inertia;

class EventController extends Controller
{
    //

    function index(){
        
    return Inertia::render('Events/List', [
            'status' => 1,
            'color'=>'dasdasdasd',
            'data'=>[
            ['id' => 1, 'name' => 'Eye leather journal', 'date' => '2024-07-01', 'color'=>'Red', 'category'=>'Common Product', 'price'=>'1500'],
            ['id' => 2, 'name' => 'Pencil', 'date' => '2024-07-02', 'color'=>'Pink', 'category'=>'Cosmetic Product', 'price'=>'2000'],
            ['id' => 3, 'name' => 'Fish', 'date' => '2024-07-03', 'color'=>'Yellow', 'category'=>'Leather Product', 'price'=>'5000'],
            ['id' => 3, 'name' => 'Fish', 'date' => '2024-07-03', 'color'=>'Yellow', 'category'=>'Leather Product', 'price'=>'5000'],
            ['id' => 3, 'name' => 'Fish', 'date' => '2024-07-03', 'color'=>'Yellow', 'category'=>'Leather Product', 'price'=>'5000'],
            ['id' => 3, 'name' => 'Fish', 'date' => '2024-07-03', 'color'=>'Yellow', 'category'=>'Leather Product', 'price'=>'5000'],
            ['id' => 3, 'name' => 'Fish', 'date' => '2024-07-03', 'color'=>'Yellow', 'category'=>'Leather Product', 'price'=>'5000'],
            ['id' => 3, 'name' => 'Fish', 'date' => '2024-07-03', 'color'=>'Yellow', 'category'=>'Leather Product', 'price'=>'5000'],
            ['id' => 3, 'name' => 'Fish', 'date' => '2024-07-03', 'color'=>'Yellow', 'category'=>'Leather Product', 'price'=>'5000'],
    ],
        ]);

    }
}
