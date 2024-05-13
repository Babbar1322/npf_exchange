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
                    <div class="d-flex">
                  <h3 class="card-title ">All Coins</h3>
                  <div class="ml-auto">
                    <a href="{{route('admin.add_coin')}}" class="btn btn-info btn-sm" >Add</a>
                  </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table ">
                    <thead>
                      <tr>
                        <th >#</th>
                        <th>Name</th>
                        <th>Network</th>
                        <th>Type</th>
                        <th>Contract Address</th>
                        {{-- <th style="min-width:120px;">Date</th> --}}
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if (!empty($coins))
                        @foreach ($coins as $key=>$coin)
                        <tr>
                            <td>{{$coins->firstItem()+$key}}</td>
                            <td>{{$coin->name}}</td>
                            <td>{{$coin->network}}</td>
                            <td>{{$coin->type}}</td>
                            <td>{{$coin->address}}</td>
                            {{-- <td>{{$coin->created_at}}</td> --}}
                            <td>
                                <a href="{{route('admin.edit_coin',$coin->id)}}" class="text-info mr-2"><i class="fa fa-edit"></i></a>
                                <a href="{{route('admin.delete_coin',$coin->id)}}" class="text-danger" onclick="return confirm('Are You sure want to delete coin!')"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                  </table>
                </div>
                  {{$coins->links()}}
                </div>
              </div>
        </div>
    </section>
</div>
@endsection