@extends('layouts.base')

@section('content')
<style>
  .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 100%;
}
</style>

<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        @if (session('status'))
            <h6 class="alert alert-success">{{session('status')}}</h6>
        @endif
        <div class="card">
          <div class="card-header"><h4>Edit Gallery</h4></div>
            <div class="card-body">
                
                
              <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
              <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
              <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
              <!------ Include the above in your HEAD tag ---------->
              
              <div class="container">
                @foreach ($slider as $slide)
              <form action="{{url('editgallerysave',$slide->id)}}" method="post"enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Upload Image</label>
                      <div class="input-group">
                          <span class="input-group-btn">
                            
                              <span class="btn btn-default btn-file">
                                  Browse… <input name="logo1" accept=".gif, .jpg, .png" type="file" id="imgInp">
                              </span>
                              
                            
                          </span>
                          <input type="text" class="form-control" readonly>
                      </div>
                      
                      <img id='img-upload' src="{{asset('/public'.$slide->logo)}}"/>
                      @endforeach
                      Choose Your Category<br>
                  {{-- <input type="checkbox" id="charity" name="charity" value="1">
                  <label for="charity"> Charity</label><br>
                  <input type="checkbox" id="construction" name="construction" value="2">
                  <label for="construction"> Construction</label><br>
                  <input type="checkbox" id="mandir" name="mandir" value="3">
                  <label for="mandir"> Mandir Darshan</label><br>
                  <input type="checkbox" id="videos" name="videos" value="4">
                  <label for="videos"> Videos</label><br> --}}
                  <select name="category" >
                    <option value="">Select</option>
                  @foreach ($category as $cat)
                  
                  <option value="{{$cat->s_no}}">{{$cat->category_name}}</option>
                 
                  @endforeach
                </select>
                  </div>
              </div>
              <div class="col-md-12">
                <input type="submit" value="Upload">
              </div>
              </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
 $(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
</script>
@endsection

@section('javascript')

@endsection
