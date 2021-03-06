@csrf
<input type="hidden" name="shop_id" value="{{ auth('shop')->user()->id }}">
<div class="form-row">
    <div class="col-md-6">
        <label for="title" class="col-form-label">{{ __('Title') }}</label>
        <input type="text" name="title" id="title" class="form-control"
    value="{{ isset($advertisement) ? $advertisement->title : ''}}">
    </div>
    <div class="col-md-6">
        <label for="start_date" class="col-form-label">{{ __('Start Date') }}</label>
        <input type="date" name="start_date" id="start_date" class="form-control"
        value="{{ isset($advertisement) ? $advertisement->start_date : ''}}">
    </div>
    <div class="col-md-6">
        <label for="end_date" class="col-form-label">{{ __('End date') }}</label>
        <input type="date" name="end_date" id="end_date" class="form-control"
        value="{{ isset($advertisement) ? $advertisement->end_date : ''}}">
    </div>
    <div class="col-md-6">
        <label for="image" class="col-form-label">{{ __('Image') }}</label>
        <input type="file" name="image" id="image" class="form-control">
        @if(isset($advertisement))
            <img src="{{asset('storage/'.$advertisement->image)}}" width="150" height="150" alt="">
        @endif
    </div>
</div>

