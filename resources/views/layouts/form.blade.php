@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>@yield('form-heading', 'Form')</h5>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" id="@yield('form_id')" method="POST" action="@yield('route')" enctype="multipart/form-data">
                            @yield('form-fields')
                            <button class="btn btn-primary" type="submit">@yield('submit-text', 'Submit')</button>
                        </form>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
@endsection
