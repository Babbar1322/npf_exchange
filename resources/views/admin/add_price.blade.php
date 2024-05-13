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
                <div class="card-header">
                  <h4 >Update Price</h4>
  
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="card-body">
                        <form role="form" method="post" action="{{route('admin.store_price')}}" >
                            @csrf
                          <div class="col-md-6">
                            
                              <!-- text input -->
                              <div class="form-group">
                                <label>NPF Price</label>
                                <input type="text" class="form-control" placeholder="Enter Price" name="price" value="{{$coin!=null ? $coin->price:''}}" required>
                              </div>
                              <!-- text input -->
                              <div class="form-group">
                                <label>Open Price</label>
                                <input type="text" class="form-control" placeholder="Enter Price" name="open" value="{{$coin!=null ? $coin->open:''}}" required>
                              </div>
                              <!-- text input -->
                              <div class="form-group">
                                <label>High Price</label>
                                <input type="text" class="form-control" placeholder="Enter Price" name="high" value="{{$coin!=null ? $coin->high:''}}" required>
                              </div>
                              <!-- text input -->
                              <div class="form-group">
                                <label>Low Price</label>
                                <input type="text" class="form-control" placeholder="Enter Price" name="low" value="{{$coin!=null ? $coin->low:''}}" required>
                              </div>
                              <div class="form-group">
                                <label>Close Price</label>
                                <input type="text" class="form-control" placeholder="Enter Price" name="close" value="{{$coin!=null ? $coin->close:''}}" required>
                              </div>
                          
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                      </div>
                </div>
              </div>
        </div>
    </section>
</div>
@endsection