@csrf
<div class="form-row">
    <div class="col-md-6">
        <label for="name" class="col-form-label">{{ __('Name') }}</label>
        <input type="text" name="name" id="name" class="form-control"
               value="{{ isset($adminShop) ? $adminShop->name : ''}}">
    </div>
    <div class="col-md-6">
        <label for="owner_name" class="col-form-label">{{ __('Owner_Name') }}</label>
        <input type="text" name="owner_name" id="owner_name" class="form-control"
               value="{{ isset($adminShop) ? $adminShop->owner_name : ''}}">
    </div>
    <div class="col-md-6">
        <label for="email" class="col-form-label">{{ __('Email') }}</label>
        <input type="email" name="email" id="email" class="form-control"
               value="{{ isset($adminShop) ? $adminShop->email : ''}}">
    </div>
    <div class="col-md-6">
        <label for="password" class="col-form-label">{{ __('Password') }}</label>
        <input type="password" name="password" id="password" class="form-control"
               value="">
    </div>
    <div class="col-md-6">
        <label for="address" class="col-form-label">{{ __('Address') }}</label>
        <input type="text" name="address" id="address" class="form-control"
               value="{{ isset($adminShop) ? $adminShop->address : ''}}">
    </div>
    <div class="col-md-6">
        <label for="phone" class="col-form-label">{{ __('Phone_No') }}</label>
        <input type="phone" name="phone" id="phone" class="form-control"
               value="{{ isset($adminShop) ? $adminShop->phone : ''}}">
    </div>
    <div class="col-md-6">
        <label for="shop_type" class="col-form-label">{{ __('Shop_Type') }}</label>
        <select class="form-control" required name="shop_type_id" id="shop_type">
            @forelse (_getallShopTypes() as $shoptype)
                <option value="{{$shoptype->id}}">{{$shoptype->type}}</option>
            @empty
                <option value="">No Shop Type Available</option>
            @endforelse
        </select>
    </div>
    <div class="col-md-12">
        <label for="description" class="col-form-label">{{ __('Description') }}</label>
        <textarea name="description" id="description" cols="15" rows="5" class="form-control"
                  value="{{ isset($adminShop) ? $adminShop->description : ''}}">{{ isset($adminShop) ? $adminShop->description : ''}}</textarea>
    </div>
    <div class="col-md-6">
        <label for="zip_code" class="col-form-label">{{ __('Zip_Code') }}</label>
        <input type="text" name="zip_code" id="zip_code" class="form-control"
               value="{{ isset($adminShop) ? $adminShop->zip_code : ''}}">
    </div>
    <div class="col-md-6">
        <label for="commission" class="col-form-label">{{ __('Commission') }}</label>
        <input type="number" name="commission" id="commission" class="form-control"
               value="{{ isset($adminShop) ? $adminShop->commission : ''}}">
    </div>
    <div class="col-md-6">
        <label for="rating" class="col-form-label">{{ __('Rating') }}</label>
        <input type="text" name="rating" id="rating" class="form-control"
               value="{{ isset($adminShop) ? $adminShop->rating : ''}}">
    </div>
    <div class="col-md-6">
        <label for="public_key" class="col-form-label">{{ __('Public_Key') }}</label>
        <input type="text" name="public_key" id="public_key" class="form-control"
               value="{{ isset($adminShop) ? $adminShop->public_key : ''}}">
    </div>
    <div class="col-md-6">
        <label for="secret_key" class="col-form-label">{{ __('Secret_Key') }}</label>
        <input type="text" name="secret_key" id="secret_key" class="form-control"
               value="{{ isset($adminShop) ? $adminShop->secret_key : ''}}">
    </div>
    <div class="col-md-6">
        <label for="icon" class="col-form-label">{{ __('Shop_Icon') }}</label>
        <input type="file" name="icon" id="icon" class="form-control"><br>
        @if(isset($adminShop))
            <img src="{{asset('storage/'.$adminShop->icon)}}" style="height:80px;width:80px;border-radius:50%">
        @endif
    </div>
</div>
<br>

