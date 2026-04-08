<?php
namespace App\Http\Controllers;
class PrefectureController extends Controller
{
    public function index()
    {
        $prefectures = config('prefectures');
        return response()->json($prefectures);
    }
}