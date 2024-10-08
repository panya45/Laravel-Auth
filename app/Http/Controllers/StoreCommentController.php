<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class StoreCommentController extends Controller
{
    /**
     * เพิ่ม Comment
     */
    public function __invoke(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->comments()->create([
            'content' => $request->content,
            'user_id' => auth()->id()
        ]);

        return back();
    }
}