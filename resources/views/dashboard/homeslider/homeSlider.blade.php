@extends('layouts.base')

@section('content')

<style>
  .img_size{
    height:100px;
    width:150px;
  }
</style>
<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Home Slider</h4></div>
            <div class="card-body">
                <div class="row mb-3 ml-3">
                    <a class="btn btn-lg btn-primary" href="{{ route('addImage') }}">Add new image</a>
                    <button class="btn btn-lg btn-info" id="saveOrder" style="margin-left: 20px;">Save Order</button>
                </div>
                
                <table class="table table-striped table-bordered datatable">
                    <thead>
                        <tr>
                         
                            <th>S. No.</th>
                            <th>Image</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>

                    </thead>
                    <tbody  id="sortable">
                   
                      @foreach ($sliders as $slider)
                      <tr data-entry-id={{$slider->id}} >
                        <td>{{$slider->id}}</td>
                        <td><img src="{{asset('/public'.$slider->logo)}}" class="img_size"></td>
                        <td>{{$slider->updated_at}}</td>
                        <td><a class="btn btn-lg btn-danger" href="{{ route('editslider', ['id' => $slider->id]) }}">{{ method_field('EDIT') }} Edit</a>
                          <a class="btn btn-lg btn-danger" onclick="return confirm('Are you sure?')" href="{{ route('slider.destroy', ['id' => $slider->id]) }}">{{ method_field('DELETE') }} Delete</a>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script
src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script
src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
crossorigin="anonymous"></script>

<script type="text/javascript">
$( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  } );
$('#saveOrder').click(function(){
    var ids = [];
    $('#sortable tr').each(function(){
        ids.push($(this).attr('data-entry-id'));
    });
  	$.ajax({
          
          method: 'POST',
          url: "{{route('sliderposition')}}",
          data: {"_token": "{{ csrf_token() }}",ids: ids, type:'homeSilder'},
          success: function(result){
            alert('Successfully Changed Order');
          }
    });
});</script>
      
@endsection

@section('javascript')

@endsection