<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatRoom;
use App\Models\ChatMessage;
use Illuminate\Support\Facades\Auth;
use App\Events\NewChatMessage;

class ChatController extends Controller
{
    public function rooms(Request $request)
    {
        return ChatRoom::all();
    }

    public function messages(Request $request, $room_id)
    {
        return ChatMessage::where('chat_room_id', $room_id)
            ->with('user')
            ->orderBy('created_at', 'DESC')
            ->get();
    }

    public function newMessage(Request $request, $room_id)
    {
        $new_message = new ChatMessage;
        $new_message->user_id = Auth::id();
        $new_message->chat_room_id = $room_id;
        $new_message->message = $request->message;
        $new_message->save();

        broadcast(new NewChatMessage($new_message))->toOthers();
        
        return $new_message;
    }
}
