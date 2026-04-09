<?php
namespace App\Http\Controllers;
class PrefectureController extends Controller
{
    public function capital()
    {
        $name = request()->query('name');
        $prefectures = config('prefectures');
        return response()->json([
            'capital' => $prefectures[$name],
        ]);
    }
}