@extends('usr.layouts.layouts')
@section('style')
<style>
    .lk:hover{
        text-decoration: underline
    }
</style>    
@endsection

@section('content')
<div class="content">
    <h2 class="content-heading">Detail Sop</h2>
    <hr>
    <div class="row my-3">
        <p><strong>Download Form</strong></p>
        <a href="/maa/sop/downloadfile/{{$sop->id}}" class="lk"><i class="fa-solid fa-file"></i> Download file</a>
        <div class="col-md-12 mt-4">
            <h3 class="text-center">{{$sop->sop_title}}</h3>
        </div>
    </div>
    <hr>
        <div class="row justify-content-center">
            <div  class="col-md-10">
                <embed src="/sop/{{$sop->file}}#toolbar=0&navpanes=0" type="application/pdf" width="100%" height="800px">
            </div>
        </div>
</div>


@endsection