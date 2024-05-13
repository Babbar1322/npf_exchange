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
                  <h4 >Add USDT Address</h4>
  
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="card-body">
                        <form role="form" method="post" action="{{route('admin.store_upi')}}" enctype="multipart/form-data">
                            @csrf
                          <div class="col-md-6">
                            
                              <!-- text input -->
                              <div class="form-group">
                                <label>USDT Address</label>
                                <input type="text" class="form-control" placeholder="Enter USDT Address" name="upi_id" value="{{$upi!=null ? $upi->upi_id:''}}" required>
                              </div>
                              <div class="form-group">
                                <label>Bar Code</label>
                                <input type="file" class="form-control"  name="bar_code"  required>
                                @if(!empty($upi && $upi->bar_code))
                                <img src="{{asset('uploads/bar_code/'.$upi->bar_code)}}" width="100">
                                @endif
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