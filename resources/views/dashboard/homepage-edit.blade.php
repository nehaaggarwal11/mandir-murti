@extends('layouts.base')

@section('content')
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>Home Page</div>
                    <div class="card-body">
                        <div class="row"> 
                          <div class="col-md-12"> 
                            <form action="{{route('add.homepage')}}" method="POST" enctype="multipart/form-data"> 
                              @csrf
                               <div class="form-group">
                                <label for="logo">Website Name</label><br>
                                  <input class="form-control" type="text" name="website_name" >
                                </div>
                              <div class="form-group">
                                <label for="logo">Logo</label><br>
                                  <input class="form-control" type="file" name="logo1" accept=".gif, .jpg, .png">
                                </div>
                                <div class="form-group">
                                   <label>About Section Heading</label>
                                  <input type="text" name="abt_heading" class="form-control">
                                 </div>
                                 <div class="form-group">
                                   <label>About Section Content</label>
                                  <textarea id=".editor" name="abt_content"></textarea>
                                 </div>
                                  <div class="form-group">
                                   <label>Footer Content</label>
                                  <textarea name="footer_text" class="form-control"></textarea>
                                 </div>
                          </div>
                        </div>
                    </div> 
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>Seo Home Page</div>
                    <div class="card-body">
                        <div class="row"> 
                          <div class="col-md-12"> 
                              <div class="form-group">
                                <label for="logo">SEO Title</label><br>
                                  <input type="text" name="seo_title" class="form-control">
                                </div>
                                <div class="form-group">
                                   <label>SEO Keyword</label>
                                  <input type="text" name="seo_keyword" class="form-control">
                                 </div>
                                 <div class="form-group">
                                   <label>SEO Decription</label>
                                    <textarea class="form-control" name="seo_description"></textarea>
                                 </div>
                                  <div class="form-group">
                                    <input name="submit" type="submit" value="Save" class="btn btn-danger">                                 </div>
                             </form>
                          </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')
 =
@endsection
