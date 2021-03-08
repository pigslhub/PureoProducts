@csrf
<div class="form-row">
    <div class="col-md-6">
        <label for="name" class="col-form-label">{{ __("Name") }}</label>
        <input
            type="text"
            name="name"
            id="name"
            class="form-control"
            value="{{ old('name', isset($adminCategory) ? $adminCategory->name : '' ) }}"
        />
        <input
            type="hidden"
            name=""
            id=""
            class="form-control"
            value="{{ old('name', isset($adminCategory) ? $adminCategory->id : '' ) }}"
        />
    </div>

    <div class="col-md-6">
        <label for="icon" class="col-form-label">{{ __("Icon") }}</label>
        <input type="file" name="icon" id="icon" class="form-control" /><br />
        @if(isset($adminCategory))
        <img
            src="{{asset('storage/'.$adminCategory->icon)}}"
            style="height: 80px; width: 80px; border-radius: 50%"
        />
        @endif
    </div>

{{--    <div class="col-md-6 mb-2">--}}
{{--        <label for="cart" class="col-form-label">{{--}}
{{--            __("Will have a cart ?")--}}
{{--        }}</label>--}}
{{--        <select class="form-control" name="is_cart">--}}
{{--            <option value="no">No</option>--}}
{{--            <option value="yes">Yes</option>--}}
{{--        </select>--}}
{{--    </div>--}}
</div>
