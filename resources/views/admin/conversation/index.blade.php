@extends('admin.layouts.master')
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
            </div>
        <div>
 </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        /// basic ajax body

        // $.ajax({
        //     url:"",
        //     type:"",
        //     data:{},
        //     success:function(data){},
        //     error:function(err){}
        //
        // })

        // basic ajax body end

        $(document).ready(function () {
            setTimeout(()=>{
                $(".chatcontainer").animate({ scrollTop: $('.chatcontainer').prop("scrollHeight")}, 1000);
            },200);
            // let firebaseConfig = {
            //     apiKey: "AIzaSyC8Pt48w4vHLRab3yZV5zsnOlC5m2FT0NA",
            //     authDomain: "hostinn-87d0d.firebaseapp.com",
            //     databaseURL: "https://hostinn-87d0d.firebaseio.com",
            //     projectId: "hostinn-87d0d",
            //     storageBucket: "hostinn-87d0d.appspot.com",
            //     messagingSenderId: "210966643814",
            //     appId: "1:210966643814:web:6a05facd1e54e2d724d9a7",
            //     measurementId: "G-WBPS5N50V2"
            // };

            // Initialize Firebase
            // firebase.initializeApp(firebaseConfig);

            let conversationid = $(".conversation_id").val();
            let sender_id = $(".sender_id").val();

            $('#btn-submit').click(function () {
                let message = $('.message').val();
                $.ajax({
                    type: 'post',
                    url: "{{route('orders.storemessage') }}",
                    data: {'message': message,'conversation_id':conversationid,'sender_id':sender_id,'sender':'shop'},
                    success: function (data) {
                        alert(data);
                        if(data=='sent')
                        {
                            loadChat(conversationid);
                        }
                        $('#message').val('');
                    },
                    error: function (err) {
                        console.log(err);
                    },
                });
            });

            // $("input").on('click',function(){
            //     let conversationid = $(this).find(".conversationid").val();
            //     loadChat(conversationid);
            // });

            function loadChat(convid)
            {
                $.ajax({
                    url:"{{route('orders.readmessage')}}",
                    type:"POST",
                    data:{"id":convid},
                    success:function(data){
                        $(".chatcontainer").html(data);
                        $(".chatcontainer").animate({ scrollTop: $('.chatcontainer').prop("scrollHeight")}, 1000);
                        console.log(data);
                        $(".message").val('');
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
