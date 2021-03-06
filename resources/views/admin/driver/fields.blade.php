@csrf
<div class="form-row">
    <div class="col-md-6">
        {{-- {{dd($adminDriver)}} --}}
        <label for="name" class="col-form-label">{{ __('Name') }}</label>
        <input type="text" name="name" id="name" class="form-control"
    value="{{ isset($adminDriver) ? $adminDriver->name : ''}}">
    </div>

    <div class="col-md-6">
        <label for="email" class="col-form-label">{{ __('Email') }}</label>
        <input type="email" name="email" id="email" class="form-control"
    value="{{ isset($adminDriver) ? $adminDriver->email : ''}}">
    </div>

    <div class="col-md-6">
        <label for="password" class="col-form-label">{{ __('Password') }}</label>
        <input type="password" name="password" id="password" class="form-control"
    value="">
    </div>

    <div class="col-md-6">
        <label for="Gender" class="col-form-label">{{ __('Gender') }}</label>
        <Select class=form-control name="gender" id="gender">
           <option value="male">Male</option>
           <option value="female">Female</option>
           <option value="other">Other</option>
        </Select>
    </div>

    <div class="col-md-6">
        <label for="address" class="col-form-label">{{ __('Address') }}</label>
        <input type="text" name="address" id="address" class="form-control"
    value="{{ isset($adminDriver) ? $adminDriver->address : ''}}">
    </div>

    <div class="col-md-6">
        <label for="phone" class="col-form-label">{{ __('Phone_No') }}</label>
        <input type="phone" name="phone" id="phone" class="form-control"
    value="{{ isset($adminDriver) ? $adminDriver->phone : ''}}">
    </div>
     {{-- <div class="col-md-6">

        <label for="shop_type" class="col-form-label">{{ __('Shop_Type') }}</label>

         <select class="form-control" name="shop_type" id="shop_type">
             @forelse (_getallShopTypes() as $category)
             <option value="{{$category->id}}">{{$category->type}}</option>

             @empty
              <option value="">NO Shop Type Avaiable</option>
             @endforelse

         </select>
        <label for="description" class="col-form-label">{{ __('Description') }}</label>
        <input type="text" name="description" id="description" class="form-control"
    value="{{ isset($adminDriver) ? $adminDriver->description : ''}}">
    </div> --}}
    <div class="col-md-6">
        <label for="zip_code" class="col-form-label">{{ __('Zip_Code') }}</label>
        <input type="text" name="zip_code" id="zip_code" class="form-control"
    value="{{ isset($adminDriver) ? $adminDriver->zip_code : ''}}">
    </div>
    <div class="col-md-6">
        <label for="nearby_zip_code" class="col-form-label">{{ __('Nearby Zip_codes Separate with comma') }}</label>
        <input type="text" name="nearby_zip_code" id="nearby_zip_code" class="form-control"
    value="{{ isset($adminDriver) ? $adminDriver->nearby_zip_code : ''}}">
    </div>

    <div class="col-md-6">
        <label for="dob" class="col-form-label">{{ __('Date_Of_Birth') }}</label>
        <input type="date" name="dob" id="dob" class="form-control"
    value="{{ isset($adminDriver) ? $adminDriver->dob : ''}}">
    </div>

    {{-- <div class="col-md-6">
        <label for="status" class="col-form-label">{{ __('Status') }}</label>
        <input type="text" name="status" id="status" class="form-control"
    value="{{ isset($adminDriver) ? $adminDriver->status : ''}}">
    </div> --}}

    <div class="col-md-6">
        <label for="rating" class="col-form-label">{{ __('Rating') }}</label>
        <input type="text" name="rating" id="rating" class="form-control"
    value="{{ isset($adminDriver) ? $adminDriver->rating : ''}}">
    </div>

    {{-- <div class="col-md-6">
        <label for="Api_Token" class="col-form-label">{{ __('Api_Token') }}</label>
        <input type="text" name="Api_Token" id="Api_Token" class="form-control"
    value="{{ isset($adminDriver) ? $adminDriver->Api_Token : ''}}">
    </div> --}}

    <div class="col-md-6">
        <label for="avatar" class="col-form-label">{{ __('Shop_Avatar') }}</label>
        <input type="file" name="avatar" id="avatar" class="form-control"><br>
        @if(isset($adminDriver))
            <img src="{{asset('storage/'.$adminDriver->avatar)}}" style="height:80px;width:80px;border-radius:50%">
        @endif
    </div>


</div>
<br>

