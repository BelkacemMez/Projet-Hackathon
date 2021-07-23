<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\PayUService\Exception;

class ItemConfigurationController extends Controller
{
    public function menu()
    {
        try {
            $path = public_path("json/db.json");
            $json = json_decode(file_get_contents($path), true);
            return response()->json($json["menu"], 200);
        } catch (\Exception $e) {
            return response()->json(storage_path(), 400);
        }
    }
    public function items()
    {
        try {
            $path = public_path("json/db.json");
            $json = json_decode(file_get_contents($path), true);
            return response()->json($json["items"], 200);
        } catch (\Exception $e) {

            return response()->json(storage_path(), 400);
        }
    }
    public function all()
    {
        try {
            $path = public_path("json/db.json");
            $json = json_decode(file_get_contents($path), true);
            return response()->json($json, 200);
        } catch (\Exception $e) {

            return response()->json(storage_path(), 400);
        }
    }
}
