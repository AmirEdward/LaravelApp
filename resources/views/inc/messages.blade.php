@if(count($errors))
    @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible">
            <button class="close" data-dismiss="alert"><span>&times</span></button>
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success alert-dismissible">
        <button class="close" data-dismiss="alert"><span>&times</span></button>
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible">
        <button class="close" data-dismiss="alert"><span>&times</span></button>
        {{session('error')}}
    </div>
@endif