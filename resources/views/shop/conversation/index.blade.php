@extends('shop.layouts.master')
@section('title', 'Inbox')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        .chatShopCard{
            border-radius:20px 30px 0px 20px;
            margin:10px 40px 10px 40px;
        }
        .chatShopCard p{
            margin-top:20px;
            margin-left:20px;
        }
        .chatShopCard span{
            font-size:8px;
            margin:20px;
        }


            /* Left Card */
        .chatCustomerCard{
            border-radius:20px 30px 20px 0px;
            margin:10px 40px 10px 40px;
        }
        .chatCustomerCard p{
            margin-top:20px;
            margin-left:20px;
        }
        .chatCustomerCard span{
            font-size:8px;
            margin:20px;
        }

            /* Left Card */
        .chatDriverCard{
            border-radius:20px 30px 20px 0px;
            margin:10px 40px 10px 40px;

        }
        .chatDriverCard p{
            margin-top:20px;
            margin-left:20px;
        }
        .chatDriverCard span{
            font-size:8px;
            margin:20px;
        }





    </style>
@endsection
@section('breadcrumb-title', 'Inbox')

@section('content')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <input type="hidden" class="conversation_id" value="{{$chats[0]->conversation_id}}" />
            <input type="hidden" class="sender_id" value="{{auth()->user()->id}}" />
            <div class="card col-md-12">
                <div class="custom-scrollbar chatcontainer" style="height:500px;overflow:scroll;overflow-x:hidden">
                @forelse($chats as $chat)
                    @if($chat->sender == 'shop')
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-6 bg-primary chatShopCard shadow-lg animate__animated animate__slideInRight">
                                <p>{{$chat->message}}</p>
                                <span class="pull-right">{{$chat->created_at}}</span>
                            </div>
                            <div class="col-md-1"><i class="fa fa-3x fa-university" style="position:relative;top:50%"></i></div>
                        </div>
                    @endif
                    @if($chat->sender == 'customer')
                         <div class="row">
                            <div class="col-md-1"><i class="fa fa-3x fa-user" style="position:relative;top:50%"></i></div>
                            <div class="col-md-6 chatCustomerCard shadow-sm animate__animated animate__slideInLeft">
                                <p>{{$chat->message}}</p>
                                <span class="pull-right">{{$chat->created_at}}</span>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    @endif
                    @if($chat->sender == 'driver')
                         <div class="row">
                            <div class="col-md-1"><i class="fa fa-3x fa-truck" style="position:relative;top:50%"></i></div>
                            <div class="col-md-6 chatDriverCard shadow-sm animate__animated animate__slideInLeft">
                            <p>{{$chat->message}}</p>
                             <span class="pull-right">{{$chat->created_at}}</span>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    @endif

                @empty
                    <h4>nothing to show </h4>
                @endforelse
            </div>
            @if($chats[0]->conversation->order->status == "complete")
                @else
                <div class="row mt-5 mb-5">
                    <div class="col-md-9">
                        <input class="form-control message" autoFocus placeholder="Type your message ...">
                    </div>
                    <div class="col-md-3">
                        <span class="animation-sent d-none">
                        <lottie-player src="https://assets4.lottiefiles.com/private_files/lf30_GAiHca.json" background="transparent"  speed="2"  style="width: 80px; height: 80px;" loop autoplay></lottie-player>
                        </span>
                        <button class="btn btn-primary" id="btn-submit">SEND</button>
                    </div>
                </div>
            @endif

            </div>
        <div>


    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function () {
            setTimeout(()=>{
                $(".chatcontainer").animate({ scrollTop: $('.chatcontainer').prop("scrollHeight")}, 1000);
            },200);
            
            
            var db = firebase.database();
             
            
            let conversationid = $(".conversation_id").val();
            let sender_id = $(".sender_id").val();
            
            db.ref(`Conversations/${conversationid}`).on("child_changed", function(snapshot) {
                setTimeout(()=>{
                loadChat(conversationid);
            },1000);
                
            }); 

            $('#btn-submit').click(function () {
                $('.animation-sent').removeClass('d-none');
                $('#btn-submit').addClass('d-none')
                let message = $('.message').val();
                $.ajax({
                    type: 'post',
                    url: "{{route('orders.storemessage') }}",
                    data: {'message': message,'conversation_id':conversationid,'sender_id':sender_id,'sender':'shop'},
                    success: function (data) {
                    },
                    error: function (err) {
                        console.log(err);
                    },
                });
            });

            function loadChat(convid)
            {
                $.ajax({
                    url:"{{route('orders.readmessage')}}",
                    type:"POST",
                    data:{"id":convid},
                    success:function(data){
                        $(".chatcontainer").html(data);
                        $(".chatcontainer").animate({ scrollTop: $('.chatcontainer').prop("scrollHeight")}, 1000);
                        $(".message").val('');
                        $('.animation-sent').addClass('d-none');
                        $('#btn-submit').removeClass('d-none')
                    },
                    error:function(err){
                        alert('hello');

                    }
                })
            }
        });
    </script>
    <script src="{{asset('assets/js/fullscreen.js')}}"></script>
@endsection
