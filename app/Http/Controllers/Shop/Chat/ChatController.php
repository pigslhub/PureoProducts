<?php

namespace App\Http\Controllers\Shop\Chat;
use App\Http\Controllers\Controller;
use App\Models\Chat\Chat;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;


class ChatController extends Controller
{
    public function readMessage(Request $request)
    {
        $completechat = "";
        $chats = Chat::where('conversation_id', $request->id)->get();
        $counter =0;
        foreach ($chats as $chat) {
            if(++$counter == $chats->count())
            {
                
                if ($chat->sender == 'shop') {
                    $completechat .= " <div class=\"row\">
                            <div class=\"col-md-4\"></div>
                            <div class=\"col-md-6 bg-primary chatShopCard shadow-lg animate__animated animate__slideInRight\">
                                <p>$chat->message</p>
                                <span class=\"pull-right\">$chat->created_at</span>
                            </div>
                            <div class=\"col-md-1\"><i class=\"fa fa-3x fa-university\" style=\"position:relative;top:50%\"></i></div>
                        </div> ";
                } else if ($chat->sender == 'customer') {
                    $completechat .= "<div class=\"row\">
                            <div class=\"col-md-1\"><i class=\"fa fa-3x fa-user\" style=\"position:relative;top:50%\"></i></div>
                            <div class=\"col-md-6 chatCustomerCard shadow-sm animate__animated animate__slideInLeft\">
                                <p>$chat->message</p>
                                <span class=\"pull-right\">$chat->created_at</span>
                            </div>
                            <div class=\"col-md-4\"></div>
                        </div>";
                } else {
                        $completechat .= "<div class=\"row\">
                            <div class=\"col-md-1\"><i class=\"fa fa-3x fa-truck\" style=\"position:relative;top:50%\"></i></div>
                            <div class=\"col-md-6 chatDriverCard shadow-sm animate__animated animate__slideInLeft\">
                            <p>$chat->message</p>
                             <span class=\"pull-right\">$chat->created_at</span>
                            </div>
                            <div class=\"col-md-4\"></div>
                        </div>";
                }
            }
            else{
                if ($chat->sender == 'shop') {
                    $completechat .= " <div class=\"row\">
                            <div class=\"col-md-4\"></div>
                            <div class=\"col-md-6 bg-primary chatShopCard shadow-lg\">
                                <p>$chat->message</p>
                                <span class=\"pull-right\">$chat->created_at</span>
                            </div>
                            <div class=\"col-md-1\"><i class=\"fa fa-3x fa-university\" style=\"position:relative;top:50%\"></i></div>
                        </div> ";
                } else if ($chat->sender == 'customer') {
                    $completechat .= "<div class=\"row\">
                            <div class=\"col-md-1\"><i class=\"fa fa-3x fa-user\" style=\"position:relative;top:50%\"></i></div>
                            <div class=\"col-md-6 chatCustomerCard shadow-sm\">
                                <p>$chat->message</p>
                                <span class=\"pull-right\">$chat->created_at</span>
                            </div>
                            <div class=\"col-md-4\"></div>
                        </div>";
                } else {
                    $completechat .= "<div class=\"row\">
                            <div class=\"col-md-1\"><i class=\"fa fa-3x fa-truck\" style=\"position:relative;top:50%\"></i></div>
                            <div class=\"col-md-6 chatDriverCard shadow-sm\">
                            <p>$chat->message</p>
                             <span class=\"pull-right\">$chat->created_at</span>
                            </div>
                            <div class=\"col-md-4\"></div>
                        </div>";
                }
            }
        }
        return $completechat;
    }

    public function sendMessage(Request $request)
    {
        Chat::create($request->all());
        $chats = Chat::where('conversation_id', $request->id)->get();

        return view('shop.conversation.index', compact('chats'));
    }

    public function storeMessage(Request $request)
    {
        $chat = Chat::create($request->all());
        $chatCount = Chat::where('conversation_id',$request->conversation_id)->get();
        $totalchatmsgs = $chatCount->count()*2;
        $factory = (new Factory)->withServiceAccount(base_path() . "/firebase/firebaseKey.json");
        $database = $factory->createDatabase();
        $ref = $database->getReference('Conversations')
            ->getChild($request->conversation_id)
            ->set([
                'message' => 'sent'.$totalchatmsgs,
            ]);
            
            
        $messaging = $factory->createMessaging();
            $message = CloudMessage::withTarget('token', $chat->conversation->customer->fcm_token)
                ->withNotification(Notification::fromArray([
                    'title' => "New Message from shop(".$chat->conversation->order->order_id.")",
                    'body' => $chat->message."",
                    'image' => "https://firebasestorage.googleapis.com/v0/b/ezcare2go-c8d45.appspot.com/o/logo.png?alt=media&token=59b7e17c-c036-4124-a9ef-00516b9ad698",
                ]));
        $messaging->send($message);
        
        
        $messaging2 = $factory->createMessaging();
            $message2 = CloudMessage::withTarget('token', $chat->conversation->driver->fcm_token)
                ->withNotification(Notification::fromArray([
                    'title' => "New Message from shop (".$chat->conversation->order->order_id.")",
                    'body' => $chat->message."",
                    'image' => "https://firebasestorage.googleapis.com/v0/b/ezcare2go-c8d45.appspot.com/o/logo.png?alt=media&token=59b7e17c-c036-4124-a9ef-00516b9ad698",
                ]));
        $messaging2->send($message2);
        if ($chat) {
            return "sent";
        } else {
            return "nosent";
        }
    }
}
