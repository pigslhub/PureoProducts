<?php

namespace App\Http\Controllers\API\Driver\Jobs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Chat\Chat;
use App\Models\Chat\Conversation;
use App\Models\Customer;
use App\Models\Driver;
use App\Models\General\Order;
use Kreait\Firebase\Factory;
use App\Models\General\Cart;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;

class JobsController extends Controller
{
    public function getAllJobs(Request $request){
        
        
        $driverZipCodes = _getAllDriverZipCodes($request->driver_id);  
        $allJobs = Order::whereIn('zip_code',$driverZipCodes)->where('status','place')->get();
        $allJobs->load('customer');
        $allJobs->load('shop');
        if($allJobs->count()>0){
             return response()->json(['all_jobs' => $allJobs]);
        }
        else{
            return response()->json(['all_jobs' => 'No Job Found']);
        }
    }

    public function acceptOrder(Request $request){
        
        $orderDetail = Order::where(['id' => $request->order_id])->first();
        $fcm_token_customer = $orderDetail->customer->fcm_token;
        $acceptedJob = Order::where('id',$request->order_id)->where('status','place')->first();
        $acceptedJob->load('customer');
        $acceptedJob->load('shop');
        if($acceptedJob !=null)
        {
            $acceptedJob->update([
                'status' => 'accept',
                'driver_id' => $request->driver_id,
            ]);
            $newConversation = Conversation::create([
                "customer_id" => $acceptedJob->customer_id,
                "driver_id" => $acceptedJob->driver_id,
                "shop_id" => $acceptedJob->shop_id,
                "order_id" => $acceptedJob->id
            ]);
            Chat::Create([
                "message" => "Order has been accepted. I am ready to follow the instruction.",
                "sender_id" => $acceptedJob->driver_id,
                "file" => "",
                "sender" => "driver",
                "conversation_id" => $newConversation->id
            ]);

            $allChat = Chat::where('conversation_id', $newConversation->id)->get();
            $factory = (new Factory)->withServiceAccount(base_path() . "/firebase/firebaseKey.json");
            $database = $factory->createDatabase();
            $database->getReference('Conversations')->getChild($newConversation->id)
            ->set([
                'message' => 'sent'.$allChat->count(),
            ]);

            $messaging = $factory->createMessaging();
            $message = CloudMessage::withTarget('token', $fcm_token_customer)
                ->withNotification(Notification::fromArray([
                    'title' => "Good News!",
                    'body' => "Your order has been accepted and on the way to you.",
                    'image' => "https://firebasestorage.googleapis.com/v0/b/ezcare2go-c8d45.appspot.com/o/logo.png?alt=media&token=59b7e17c-c036-4124-a9ef-00516b9ad698",
                ]));

            $messaging->send($message);


            if ($acceptedJob->count() > 0) {
                return response()->json(["job_select"=>"yes"]);
            }

            }else{
                return response()->json(['job_select' => 'No Job Found.']);
            }



    }

    public function onGoingOrder(Request $request){

        $driverZipCodes = _getAllDriverZipCodes($request->driver_id);   
        
        $onGoingOrder = Order::where('driver_id',$request->driver_id)->whereIn('zip_code',$driverZipCodes)->whereIn('status',['accept','ready'])->get();
        
        $onGoingOrder->load('shop','customer','driver','conversation');
        if($onGoingOrder->count()>0){
            return response()->json(['ongoing_orders' => $onGoingOrder]);
            }
            else{
               return response()->json(['ongoing_orders' => 'No OnGoing Order Found']);
            }

    }

    public function cancelOrder(Request $request){

        $driverZipCodes = _getAllDriverZipCodes($request->driver_id);
        $cancelOrder = Order::where('driver_id',$request->driver_id)->whereIn('zip_code',$driverZipCodes)->where('status','cancel')->get();
        $cancelOrder->load('shop','customer','driver','conversation');
        if($cancelOrder->count()>0){
            return response()->json(['cancel_orders' => $cancelOrder]);
            }
            else{
               return response()->json(['cancel_orders' => 'No Cancel Order Found']);
            }

    }

    public function completedOrder(Request $request){
        
        $driverZipCodes = _getAllDriverZipCodes($request->driver_id);
        $completedOrder = Order::where('driver_id',$request->driver_id)->whereIn('zip_code',$driverZipCodes)->where('status','complete')->get();
        $completedOrder->load('shop','customer','driver','conversation');
        if($completedOrder->count()>0){
            return response()->json(['completed_orders' => $completedOrder]);
            }
            else{
               return response()->json(['completed_orders' => 'No Completed Order Found']);
            }

    }

    public function SingleOrderCartDetails(Request $request)
    {

        $singleOrderCart = Cart::where('order_id', $request->order_id)->get();
        $singleOrderCart->load('product');
        return response()->json(['carts' => $singleOrderCart]);
    }
}
