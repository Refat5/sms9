@extends('layout.back-end.app')
@section('content')
<div class="col-md-12">
    <!-- Default Elements -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Create Social Activite </h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
                <form role="form" action="{{ route('socialActivite.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <div class="form-group row">
                    <label class="col-12" for="example-text-input">Title</label>
                    <div class="col-md-12">
                        <input type="text"  class="form-control" id="example-text-input" name="title" placeholder="Text..">
                        
                    </div>
                </div>
             
           
               
                    <label class="col-12" for="example-textarea-input">Description</label>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <textarea name="description" id="editor" cols="30" rows="20" class="form-control"></textarea>
                        </div>
                    </div>
           
               
            
               
               
                <div class="form-group row">
                    <label class="col-12" for="example-file-input">Social Activite Image Privew</label>
                    <div class="col-12">
                      
                                <center>
                                    <div class="fileinput-new thumbnail" style="height: 140px; width:140px">
                                        <img id="previmage" src="{{ asset('/assets/images/album-image-1.jpg') }}" width="140">
                                    </div>
                                </center>
                                <label for="profile_photo" class="control-label">Social Activite Image*</label>
                                <input type="file" required class="form-control" id="previmage" name="image" onchange="readURL(this);">
                           
                       
                    </div>
                </div>
              
                <div class="form-group row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-alt-primary">save</button>
                        <a class="btn btn-secondary"  href="{{ route('socialActivite.home') }}">Close</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
   
@endsection
@section('script')
    <Script>
    


        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#previmage')
                        .attr('src', e.target.result)
                        .width(140)
                        .height(140);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </Script>
@endsection