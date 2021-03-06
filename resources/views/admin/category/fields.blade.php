@csrf
<div class="form-row">
    <div class="col-md-6">
        <label for="type" class="col-form-label">{{ __("Type") }}</label>
        <input
            type="text"
            name="type"
            id="type"
            class="form-control"
            value="{{ isset($adminShopType) ? $adminShopType->type : ''}}"
        />
    </div>

    <div class="col-md-6">
        <label for="icon" class="col-form-label">{{ __("Icon") }}</label>
        <input type="file" name="icon" id="icon" class="form-control" /><br />
        @if(isset($adminShopType))
        <img
            src="{{asset('storage/'.$adminShopType->icon)}}"
            style="height: 80px; width: 80px; border-radius: 50%"
        />
        @endif
    </div>

    <div class="col-md-6 mb-2">
        <label for="cart" class="col-form-label">{{
            __("Will have a cart ?")
        }}</label>
        <select class="form-control" name="is_cart">
            <option value="no">No</option>
            <option value="yes">Yes</option>
        </select>
    </div>
</div>
