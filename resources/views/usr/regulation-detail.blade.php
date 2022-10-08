@extends('usr.layouts.layouts')
@section('style')
    
@endsection
@section('content')
<div class="content">
    <h2 class="content-heading">Detail Regulation</h2>
    <hr>
</div>
<div class="content">
    <div class="row my-3 justify-content-center">
        <div class="col-md-10">
            <h3>{{$regulation->title}}</h3>
            <br>
            <p>{{$regulation->content}}</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <embed src="/regulation/{{$regulation->file}}#toolbar=0&navpanes=0" type="application/pdf" width="100%" height="800px">
        </div>
    </div>
</div>
@endsection

@section('javascript')
  
@endsection