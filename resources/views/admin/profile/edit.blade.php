@extends('admin.layouts.master')

@section('title', 'Edit Profile')
@section('styles')
    <style>
        .btn-file {
            position: relative;
            overflow: hidden;
        }

        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: pointer;
            display: block;
        }

        #img-upload {
            width: 25%;
        }

        #img-upload1 {
            width: 25%;
        }
    </style>
@endsection
@section('breadcrumb-title', 'Profile')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Admin</li>
    <li class="breadcrumb-item active">Edit Profile</li>
@endsection

@section('content')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">My Profile</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#"
                                                         data-toggle="card-collapse"><i
                                        class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#"
                                                                            data-toggle="card-remove"><i
                                        class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-auto mx-auto d-block">
                                    <img class="img-80 rounded-circle" alt="" src="{{auth('admin')->user()->getAvatarPath()}}">
                                </div>
                                <div class="mx-auto d-block">
                                    <h3 class=" mt-3">{{$user->name}}</h3>
                                </div>
                            </div>
                            <div class="mt-4 form-group input-group-square">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="icofont icofont-user"></i></span></div>
                                    <input class="form-control" value="{{$user->name}}" readonly>
                                </div>
                            </div>
                            <div class="mt-4 form-group input-group-square">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="icofont icofont-envelope"></i></span></div>
                                    <input class="form-control" value="{{$user->email}}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 card">
                    <form class="" action="{{route('admin.profile.update',['id' => $user->id])}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title mb-0">Edit Profile</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="info-personal-tab" data-toggle="tab"
                                                        href="#info-personal" role="tab" aria-controls="info-home"
                                                        aria-selected="true"><i class="icofont icofont-businessman"></i>Personal</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="info-tabContent">
                                <div class="tab-pane fade show active" id="info-personal" role="tabpanel"
                                     aria-labelledby="info-personal-tab">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Name</label>
                                                <input class="form-control" type="text" name="name"
                                                       value="{{$user->name}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Email</label>
                                                <input class="form-control" readonly type="email" name="email" value="{{$user->email}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="password" class="col-form-label">{{ __('Password') }}</label>
                                            <input type="password" name="password" placeholder="*****"
                                                   class="form-control" autocomplete="off">
                                        </div>
                                        {{--<div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Phone</label>
                                                <input id="phone" class="form-control" type="tel" name="phone" value="{{$user->phone}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Address</label>
                                                <input class="form-control" type="text" name="address"
                                                       value="{{$user->address}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Suite</label>
                                                <input class="form-control" type="text" name="suite" value="{{$user->suite}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">City</label>
                                                <input class="form-control" type="text" name="city" value="{{$user->city}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Zip</label>
                                                <input class="form-control" type="text" name="zip" value="{{$user->zip}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="country">Country</label>
                                            <select name="country_id" class="form-control" id="country_id">
                                                @if($user->country_id == null)
                                                    <option value="106">Jamaica</option>
                                                @else
                                                    <option value="{{ $user->country_id }}" >{{ $user->country->name }}</option>
                                                @endif
                                                @foreach(_countries() as $country)
                                                    <option
                                                        value="{{ $country->id }}" {{ old('country_id') == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="state">State</label>
                                            <select name="state_id" class="form-control" id="state_id">
                                                @if($user->state_id == null)
                                                    <option value="1645">Kingston Parish</option>
                                                @else
                                                    <option value="{{ $user->state_id }}" >{{ $user->state->name }}</option>
                                                @endif
                                                @foreach(_states() as $state)
                                                    <option
                                                        value="{{ $state->id }}" {{ old('state_id') == $state->id ? 'selected' : '' }}>{{ $state->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>--}}
{{--                                        <div class="mt-3 col-md-12">--}}
{{--                                            <label class="form-label">Profile Image</label>--}}
{{--                                            <div class="form-group input-group-square">--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <div class="input-group-prepend input-group-btn">--}}
{{--                                                <span class="input-group-text btn-file">--}}
{{--                                                    <i class="icofont icofont-upload"></i>--}}
{{--                                                    <input type="file" name="avatar" id="imgInp">--}}
{{--                                                </span>--}}
{{--                                                    </div>--}}
{{--                                                    <input class="form-control" readonly>--}}
{{--                                                </div>--}}
{{--                                                <img class="mb-3 mt-3 mx-auto d-block" id='img-upload'/>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-secondary" type="submit">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection
@section('scripts')
    <script src="{{asset('assets/js/statesAjax.js')}}"></script>
    <script>
        $(document).ready(function () {
            $(document).on('change', '.btn-file :file', function () {
                let input = $(this),
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [label]);
            });
            $('.btn-file :file').on('fileselect', function (event, label) {
                let input = $(this).parents('.input-group').find(':text'),
                    log = label;

                if (input.length) {
                    input.val(log);
                } else {
                    if (log) alert(log);
                }

            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    let reader = new FileReader();

                    reader.onload = function (e) {
                        $('#img-upload').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imgInp").change(function () {
                readURL(this);
            });

            function readURL1(input) {
                if (input.files && input.files[0]) {
                    let reader = new FileReader();

                    reader.onload = function (e) {
                        $('#img-upload1').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imgInp1").change(function () {
                readURL1(this);
            });
        });
    </script>
@endsection
