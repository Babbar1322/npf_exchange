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
                    <a href="{{route('admin.coins')}}" class="text-dark pr-3 my-auto"><i class="fa fa-chevron-left"></i></a>
                  <h4 >Edit Coin</h4>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="card-body">
                        <form role="form" method="post" action="{{route('admin.update_coin',$coin->id)}}" enctype="multipart/form-data">
                            @csrf
                          <div class="col-md-6">
                            
                              <!-- text input -->
                              <div class="form-group">
                                <label>Coin Name</label>
                                <input type="text" class="form-control" placeholder="Enter Coin Name" name="name" value="{{$coin->name}}" required>
                              </div>
                              <div class="form-group">
                                <label>Contract Address</label>
                                <input type="text" class="form-control" placeholder="Enter Contract Address" name="address" value="{{$coin->address}}" required>
                              </div>
                              <div class="form-group">
                                <label>Address Type</label>
                                <select name="type" class="form-control form-select" required>
                                  <option value="" disabled selected>Choose Type</option>
                                  <option value="testnet" {{$coin->type=='testnet'?'selected':''}}>TestNet</option>
                                  <option value="livenet" {{$coin->type=='livenet'?'selected':''}}>LiveNet</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Network</label>
                                <input type="text" class="form-control" value="BEP20"  readonly>
                              </div>
                             
                              <div class="form-group">
                                <label>ABI</label>
                               <textarea name="abi" class="form-control" rows="5" name="abi" placeholder="Enter Post Description">{{ $coin->abi }}</textarea>
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