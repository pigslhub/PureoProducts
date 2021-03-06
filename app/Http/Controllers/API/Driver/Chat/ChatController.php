<?php

namespace App\Http\Controllers\API\Driver\Chat;

use App\Http\Controllers\Controller;
use App\Models\Chat\Chat;
use Illuminate\Http\Request;
use App\Models\Chat\Conversation;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;
class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
        if ($request->hasFile('file')) {
            $chat = Chat::create($request->except('file'));
            $filePath = $request->file('file')->store('images/driver/chat/order/' . $request->conversation_id, 'public');
            $chat->update([
                'file' => $filePath,
            ]);
            
            $allChat = Chat::where('conversation_id', $request->conversation_id)->get();
            $totalchatmsgsPic =$allChat->count()*100;
            $factory = (new Factory)->withServiceAccount(base_path() . "/firebase/firebaseKey.json");
            $database = $factory->createDatabase();
            $database->getReference('Conversations')->getChild($request->conversation_id)
            ->set([
                'message' => 'sent'.$totalchatmsgsPic,
            ]);
            
            $conversation = Conversation::where('id',$request->conversation_id)->first();
            
            $messaging = $factory->createMessaging();
            $message = CloudMessage::withTarget('token', $conversation->customer->fcm_token)
                ->withNotification(Notification::fromArray([
                    'title' => "New Message ( ".$conversation->order->order_id." )!",
                    'body' => "You received a photo",
                    'image' => "https://firebasestorage.googleapis.com/v0/b/ezcare2go-c8d45.appspot.com/o/logo.png?alt=media&token=59b7e17c-c036-4124-a9ef-00516b9ad698",
                ]));

            $messaging->send($message);
            return response()->json(['chat' => $chat]);
        } else {
            $allChat = Chat::where('conversation_id', $request->conversation_id)->get();
            $totalchatmsgs = $allChat->count()*100;
            $factory = (new Factory)->withServiceAccount(base_path() . "/firebase/firebaseKey.json");
            $database = $factory->createDatabase();
            $database->getReference('Conversations')->getChild($request->conversation_id)
            ->set([
                'message' => 'sent'.$totalchatmsgs,
            ]);
            $conversation = Conversation::where('id',$request->conversation_id)->first();
            $messaging = $factory->createMessaging();
            $message = CloudMessage::withTarget('token', $conversation->customer->fcm_token)
                ->withNotification(Notification::fromArray([
                    'title' => "New Message ( ".$conversation->order->order_id." )!",
                    'body' => "".$request->message,
                    'image' => "https://firebasestorage.googleapis.com/v0/b/ezcare2go-c8d45.appspot.com/o/logo.png?alt=media&token=59b7e17c-c036-4124-a9ef-00516b9ad698",
            ]));
            $messaging->send($message);
            $chat = Chat::create($request->all());
            return response()->json(['chat' => $chat]);
        }
    }

    public function viewAllChat(Request $request)
    {
        $completeChat = Chat::where('conversation_id', $request->conversation_id)->get();
        return response()->json(['chat' => $completeChat]);
    }
}
