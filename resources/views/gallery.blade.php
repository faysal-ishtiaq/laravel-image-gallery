@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            @foreach($photos as $photo)
                <img src="{{asset($photo->path)}}" alt="" class="img-rounded">
            @endforeach
        </div>
    </div>
</div>
@endsection
