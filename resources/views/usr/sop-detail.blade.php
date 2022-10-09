@extends('usr.layouts.layouts')
@section('style')
<style>
    .lk:hover{
        text-decoration: underline
    }
    .content{
        pointer-events: none;
    }
</style>    
@endsection

@section('content')
<div class="content">
    <div class="d-flex justify-content-between">
      <h2 class="">Detail Sop</h2>
      <a href="/maa/sop/downloadfile/{{$sop->id}}"><i class="fa fa-file text-danger lk"> Download File</i> </a>
    </div>
    <hr>
        <div class="row justify-content-center">
          <h1 class="text-center pb-5">{{$sop->sop_title}}</h1>
            <div  class="col-md-10">
                <embed src="/sop/{{$sop->file}}#toolbar=0&navpanes=0" type="application/pdf" width="100%" height="800px">
                    
                </embed>
            </div>
        </div>
</div>


@endsection

@section('javascript')
<script src="{{asset('assets/js/lib/jquery.min.js')}}"></script>
<script type="text/javascript">
    
</script>
@endsection