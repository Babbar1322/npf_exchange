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
                  <h3 class="card-title ">All Transactions</h3>
                  <div class="card-tools d-flex mt-1">
                    <form class="form-inline ml-3" action="" method="get">
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
                      </form>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                  <table class="table ">
                    <thead>
                      <tr>
                        <th >#</th>
                        <th>Email</th>
                        <th>Amount</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th style="min-width:120px;">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if (!empty($records))
                        @foreach ($records as $key=>$user)
                        <tr>
                            <td>{{$records->firstItem()+$key}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->amount}}</td>
                            <td>{{$user->type}}</td>
                            <td>{{$user->description}}</td>
                            <td>{{$user->created_at}}</td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                  </table>
                    </div>
                  {{$records->links()}}
                </div>
              </div>
        </div>
    </section>
</div>
@endsection