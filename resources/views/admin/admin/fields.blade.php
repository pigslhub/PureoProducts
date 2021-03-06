@csrf
<div class="form-row">
    <div class="col-md-6">
        {{-- {{dd($adminDriver)}} --}}
        <label for="name" class="col-form-label">{{ __('Name') }}</label>
        <input type="text" name="name" id="name" class="form-control" 
    value="{{ isset($adminAdmin) ? $adminAdmin->name : ''}}">
    </div> 
    
    <div class="col-md-6">
        <label for="email" class="col-form-label">{{ __('Email') }}</label>
        <input type="email" name="email" id="email" class="form-control" 
    value="{{ isset($adminAdmin) ? $adminAdmin->email : ''}}">
    </div>

    <div class="col-md-6">
        <label for="password" class="col-form-label">{{ __('Password') }}</label>
        <input type="password" name="password" id="password" class="form-control" 
    value="">
    </div>

    <div class="col-md-6">
        <label for="avatar" class="col-form-label">{{ __('Admin_Avatar') }}</label>
        <input type="file" name="avatar" id="avatar" class="form-control"><br>
        @if(isset($adminAdmin))
            <img src="{{asset('storage/admin/avatar'.$adminAdmin->avatar)}}" style="height:80px;width:80px;border-radius:50%">
        @endif
    </div>


</div>
<br>

