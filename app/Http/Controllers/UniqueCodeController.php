<?php


namespace App\Http\Controllers;


use App\Models\UniqueCode;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UniqueCodeController extends Controller
{
    public function saveToDb(Request $request)
    {
        foreach (array_chunk($request->unique_codes,50000) as $uniqueCodes) {
            DB::table('unique_codes')->insertOrIgnore($uniqueCodes);
        }

        return new JsonResponse(
            ['message' => DB::table('unique_codes')->count().' rows exist'],
            200
        );
    }
}
