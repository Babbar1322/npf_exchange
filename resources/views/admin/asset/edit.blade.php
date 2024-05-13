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
                    <a href="{{route('admin.assets')}}" class="text-dark pr-3 my-auto"><i class="fa fa-chevron-left"></i></a>
                  <h4>Edit Asset</h4>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="card-body">
                        <form role="form" method="post" action="{{route('admin.update_asset',$asset->id)}}" enctype="multipart/form-data">
                            @csrf
                          <div class="col-md-6">
                            
                              <!-- text input -->
                              <div class="form-group">
                                <label>Asset Name</label>
                                <input type="text" class="form-control" placeholder="Enter Valid Coin Name with USDT" name="name" value="{{$asset->name}}" required>
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