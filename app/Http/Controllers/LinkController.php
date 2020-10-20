<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        $links = Link::query()
            ->orderByDesc('order')
            ->get();

        return view('links.index', compact('links'));
    }
}
