@extends('layouts.base')

@section('content')

<style>
  .img_size{
    height:100px;
    width:150px;
  }
  /* .hidden{
    display: none;
  } */
  #form_id{
    width:30%;
    float: left;
    line-height: 42px;
  }
  .datatable{
    width: 70%;
    float: right;
  }
  .create_btn{
    margin-top: 7px;
  }
</style>
<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Manage Catagories</h4></div>
            <div class="card-body">
                {{-- <div class="row mb-3 ml-3" id="hide">
                    <button class="btn btn-lg btn-primary" onclick="show_form()">Add new category</button>
                </div> --}}
                
                  <form action="create_category" id="form_id">
                    <h4>Create New Category</h4>
                  Category Name&nbsp;<br><input type="text" name="category_name"><br>
                  <input class="btn btn-lg btn-danger create_btn" type="submit" value="Create" >
                </form>
               
                <table class="table table-striped table-bordered datatable">
                    <thead>
                        <tr>
                         
                            <th>ID</th>
                            
                            <th>Name</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>

                    </thead>
                    <tbody>
                    
                      @foreach ($category as $cat)
                      <tr>
                        <td>{{$cat->s_no}}</td>
                        
                        <td>{{$cat->category_name}}</td>
                        <td>{{$cat->created_at}}</td>
                        <td>
                          {{-- <a class="btn btn-lg btn-danger" href="{{ route('category.destroy', ['id' => $cat->s_no]) }}">{{ method_field('EDIT') }}Edit</a> --}}
                          <a class="btn btn-lg btn-danger" onclick="return confirm('Are you sure?')" href="{{ route('category.destroy', ['id' => $cat->s_no]) }}">{{ method_field('DELETE') }}Delete</a></td>
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
<script>
function show_form(){
  document.getElementById("form_id").classList.remove('hidden');
  document.getElementById("hide").classList.add('hidden');
}
</script>
@endsection

@section('javascript')

@endsection