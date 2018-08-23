@if($errors->all())
    <div class="alert alert-danger alert-dismissible text-center">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            @foreach($errors->all() as $key => $row)
                <li style="list-style-type: none"><i class="fa fa-times"></i> {!! $row !!}</li>
            @endforeach
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible text-center">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <li style="list-style-type: none"><i class="fa fa-times"></i> {!! session('error') !!}</li>
    </div>
@endif

@if(isset($error) && !empty($error))
    <div class="alert alert-danger alert-dismissible text-center">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <li style="list-style-type: none"><i class="fa fa-times"></i> {!! $error !!}</li>

    </div>
@endif

@if(session('success'))
    <div class="alert alert-success text-center">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <li style="list-style-type: none"><i class="fa fa-check"></i> {!! session('success') !!}</li>
    </div>
@endif

@if (session('status'))
    <div class="alert alert-success text-center">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <li style="list-style-type: none"><i class="fa fa-check"></i> {{ session('status') }}</li>
    </div>
@endif