<?php

namespace App\Http\Controllers\Admin\Chat;

use App\Http\Controllers\Controller;
use App\Models\Chat\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
//    public function sendMessage(Request $request)
//    {
//        if ($request->hasFile('file')) {
//            $chat = Chat::create($request->except('file'));
//            $filePath = $request->file('file')->store('images/customer/chat/order/' . $request->conversation_id, 'public');
//            $chat->update([
//                'file' => $filePath,
//            ]);
//            return response()->json(['chat' => $chat]);
//        } else {
//            $chat = Chat::create($request->all());
//            return response()->json(['chat' => $chat]);
//        }
//
//    }
//
//    public function viewAllChat(Request $request)
//    {
//        $completeChat = Chat::where('conversation_id',$request->conversation_id)->get();
//        return response()->json(['chat' => $completeChat]);
//    }

    public function readMessage(Request $request)
    {
//            return $request->id;
        $completechat = "";
        $chats = Chat::where('conversation_id', $request->id)->get();
        $counter =0;
        foreach ($chats as $chat) {

            if(++$counter == $chats->count())
            {
                if ($chat->sender_id === auth('shop')->user()->id && $chat->sender == 'shop') {
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
            }else{
                if ($chat->sender_id === auth('shop')->user()->id && $chat->sender == 'shop') {
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

        return view('admin.conversation.index', compact('chats'));
    }

    public function storeMessage(Request $request)
    {
        $chat = Chat::create($request->all());
        // $chatCount = Chat::where('conversation_id',$request->conversation_id)->get()->count();
        // $serviceAccount = ServiceAccount::fromJsonFile('assets/json/firebase.json');
        // $firebase = (new Factory())->withServiceAccount($serviceAccount)->create();
        // $database = $firebase->getDatabase();
        // $ref = $database->getReference('conversation')
        //     ->getChild($request->conversation_id)
        //     ->set([
        //         'sent' => 'start'.$chatCount,
        //     ]);
        if ($chat) {
            return "sent";
        } else {
            return "nosent";
        }
    }
}
