@extends('adm.layouts.layouts')
@section('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="content">
    <h2 class="content-heading">Add News</h2>
</div>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div style="color:#ea4c88">
                <!-- Session Status -->
              <x-auth-session-status class="mb-4" :status="session('status')" />
          
              <!-- Validation Errors -->
              <x-auth-validation-errors class="mb-4" :errors="$errors" />
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="/admin/news/create" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row push">
                          <div class="col-lg-12 col-xl-12">
                            <div class="mb-4">
                              <label class="form-label" for="example-text-input">Title</label>
                              <input type="text" class="form-control" id="example-text-input" name="title" >
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Short Title</label>
                                <input type="text" class="form-control" id="example-text-input" name="short" >
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Content</label>
                                <textarea id="summernote" name="content"rows="10"></textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Thumbnail image</label>
                                <input accept="image/*" type='file' id="imgInp" name="image" class="form-control">
                                <img width="300px" id="blah" src="#" alt="Prevew image" class="img-fluid m-3" />
                               </div>
                            <button type="submit" class="btn btn-primary">Add News</button>
                          </div>
                        </div>
                      </form>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
        ]
        });
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    });
</script>
@endsection