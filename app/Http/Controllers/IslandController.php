<?php

namespace App\Http\Controllers;

use App\Http\Resources\IslandResource;
use App\Models\Island;
use Illuminate\Http\Request;

class IslandController extends Controller
{
    public function index() {
        return IslandResource::collection(Island::latest()->paginate(10));
    }
}
