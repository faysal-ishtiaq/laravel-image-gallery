@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        @foreach($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="col-md-8">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="upImage">
                <button class="btn btn-primary">Upload</button>
            </form>
        </div>
    </div>
</div>
@endsection
