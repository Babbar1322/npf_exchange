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
                  <h3 class="card-title ">User Trades</h3>
                  <div class="card-tools d-flex mt-1">
                    {{-- <form class="form-inline ml-3" action="" method="get">
                        <div class="input-group input-group-sm">
                          <input class="form-control form-control-navbar" type="search" placeholder="Search By Sponser Id"  name="sponser_search">
                          <div class="input-group-append">
                            <button class="btn btn-success" type="submit">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </form>
                    <form class="form-inline ml-3" action="" method="get">
                        <div class="input-group input-group-sm">
                          <input class="form-control form-control-navbar" type="search" placeholder="Search"  name="search">
                          <div class="input-group-append">
                            <button class="btn btn-success" type="submit">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </form> --}}
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="table-responsive">
                  <table class="table ">
                    <thead>
                      <tr>
                        <th >#</th>
                        <th>User</th>
                        <th>Symbol</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Amount(USDT)</th>
                        <th>Amount(Asset)</th>
                        <th style="min-width:120px;">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if (!empty($trades))
                        @foreach ($trades as $key=>$trade)
                        <tr>
                            <td>{{$trades->firstItem()+$key}}</td>
                            @if($trade->user != null)
                            <td>{{$trade->user->name}}({{$trade->user->uid}})</td>
                            @else
                            <td>{{$trade->user_id}}</td>
                            @endif
                            <td>{{$trade->symbol}}</td>
                            <td>{{$trade->type}}</td>
                            <td>{{$trade->price}}</td>
                            <td>{{$trade->amount}}</td>
                            <td>{{$trade->quantity}}</td>
                            {{-- <td>{{$user->enable == 1 ? "Yes":"No"}}</td> --}}
                            <td>{{$trade->created_at}}</td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                  </table>
                  {{$trades->links()}}
                  </div>
                </div>
              </div>
        </div>
    </section>
</div>
<script>
  function Login(id){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
    });
    
    $.ajax({
      url:"{{route('admin.user_login')}}",
      method:"POST",
      data:{
        id:id
      },
      success:function(data){
          if(data.token){
            localStorage.removeItem('token');
            localStorage.setItem('token',data.token);
            // window.location.href = "{{route('user.home')}}";
            window.open("{{route('user.home')}}",'_blank');
          }
      }
    });
  }
  </script>
@endsection