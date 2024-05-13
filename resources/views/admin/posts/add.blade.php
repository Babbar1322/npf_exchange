@extends('layouts.app')
   
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif
            <div class="card">
                <div class="card-header d-flex">
                    <a href="{{route('admin.posts')}}" class="text-dark pr-3 my-auto"><i class="fa fa-chevron-left"></i></a>
                  <h4 >Add Post</h4>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="card-body">
                        <form role="form" method="post" action="{{route('admin.store_post')}}" enctype="multipart/form-data">
                            @csrf
                          <div class="col-md-6">
                            
                              <!-- text input -->
                              <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" placeholder="Enter Title" name="title" value="{{old('title')}}" required>
                              </div>
                              <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image"  required>
                              </div>
                              <div class="form-group">
                                <label>Description</label>
                               <textarea name="description" class="form-control" rows="3" name="description" placeholder="Enter Post Description"></textarea>
                              </div>
                          <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                      </div>
                </div>
              </div>
        </div>
    </section>
</div>
@endsection