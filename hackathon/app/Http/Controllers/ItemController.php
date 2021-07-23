<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\PayUService\Exception;

class ItemController extends Controller
{
    public function index()
    {

            $path = public_path("json/db.json");
            $json = json_decode(file_get_contents($path), true);
            $menus=$json["menu"];
            $items=$json["items"];
            return view('index')->with(compact('menus','items'));

    }
}
