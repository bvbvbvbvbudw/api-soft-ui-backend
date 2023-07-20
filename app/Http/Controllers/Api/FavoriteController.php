<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function toggleFavorite(Request $request)
    {
        $existingFavorite = Favorite::where('user_id', $request->user_id)
            ->where('project_id', $request->project_id)
            ->first();

        if ($existingFavorite) {
            $existingFavorite->delete();
            return response()->json(['message' => 'Project removed from favorites.']);
        } else {
            Favorite::create([
                'user_id' => $request->user_id,
                'project_id' => $request->project_id
            ]);
            return response()->json(['message' => 'Project added to favorites.']);
        }
    }

    public function checkFavorite(Request $request)
    {
        $favoriteExists = Favorite::where('user_id', $request->user_id)
            ->where('project_id', $request->project_id)
            ->exists();

        return response()->json(['favoriteExists' => $favoriteExists]);
    }
}
