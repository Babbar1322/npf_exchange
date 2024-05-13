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
                  <h4 >Update USDT Price (INR)</h4>
  
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="card-body">
                        <form role="form" method="post" action="{{route('admin.store_usdtPrice')}}" >
                            @csrf
                          <div class="col-md-6">
                            
                              <!-- text input -->
                              <div class="form-group">
                                <label> Price</label>
                                <input type="text" class="form-control" placeholder="Enter Price in INR" name="price" value="{{$coin!=null ? $coin->price:''}}" required>
                              </div>
                              <!-- text input -->
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                      </div>
                </div>
              </div>
        </div>
    </section>
</div>
@endsection