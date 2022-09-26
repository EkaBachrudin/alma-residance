@extends('adm.layouts.layouts')
@section('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Data Calon Konsumen</h1>
        </div>
    </div>

    {{-- <div class="row my-4">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <p><strong>Pencarian</strong></p>
                    <hr>
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label"> Tanggal </label>
                            <input type="text" class="form-control sm" name="datefilter" readonly  placeholder="Pilih tanggal .... " />
                        </div>
                        <div class="mb-3">
                            <label class="form-label"> Nama </label>
                            <input type="text" class="form-control" name="search"  placeholder="Cari Nama .... " />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow rounded-0">
                <div class="card-body table-responsive">
                    <table class="table table-striped" id="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>No Telpon</th>
                                <th>Email</th>
                                <th>Tanggal input</th>
                                <th>Status</th>
                                <th>Kirim Pesan Wa</th>
                            </tr>
                        </thead>
                        <tbody id="wbodychange">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.12.1/dataRender/datetime.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js" integrity="sha512-42PE0rd+wZ2hNXftlM78BSehIGzezNeQuzihiBCvUEB3CVxHvsShF86wBWwQORNxNINlBPuq7rG4WWhNiTVHFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
   var table = $('#table').DataTable( {
        "ajaxSource": "/getDataKonsumen",
        "columns": [
            { "data": "nama" },
            { "data": "tlp" },
            { "data": "email" },
            { "data": "created_at", render:function(data){return moment(data).format('MM D YYYY h:mm:ss');}},
            { "data": "status" },
            {"data": function(data){
                             return `<a target="_blank" href="https://wa.me/62`+data.tlp+`?text=Terima%20Kasih%20Telah%20Menghubungi%20Alma%20residance"><button class="btn btn-success btn-sm">Kirim</button></a>`;
                        }}
        ]
    } );

    setInterval( function () {
        table.ajax.reload();
        console.log('this interval');
    }, 10000 );
</script>
@endsection