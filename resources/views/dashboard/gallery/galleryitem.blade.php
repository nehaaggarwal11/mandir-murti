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
          <div class="card-header"><h4>Manage Gallery</h4></div>
            <div class="card-body">
                <div class="row mb-3 ml-3">
                    <a class="btn btn-lg btn-primary" href="{{ route('addgallery') }}">Add new image</a>
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
                    <tbody>
                    
                      @foreach ($sliders as $slider)
                      <tr>
                        <td>{{$slider->id}}</td>
                        <td><img src="{{asset('/public'.$slider->logo)}}" class="img_size"></td>
                        <td>{{$slider->updated_at}}</td>
                        <td><a class="btn btn-lg btn-danger" href="{{ route('editgallery', ['id' => $slider->id]) }}">{{ method_field('EDIT') }} Edit</a>
                          <a class="btn btn-lg btn-danger" onclick="return confirm('Are you sure?')" href="{{ route('tasks.destroy', ['id' => $slider->id]) }}">{{ method_field('DELETE') }} Delete</a></td>
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

@endsection

@section('javascript')

@endsection