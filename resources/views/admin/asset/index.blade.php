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
                  <h3 class="card-title ">All Assets</h3>
                  <div class="ml-auto">
                    <a href="{{route('admin.add_asset')}}" class="btn btn-info btn-sm" >Add</a>
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
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if (!empty($assets))
                        @foreach ($assets as $key=>$asset)
                        <tr>
                            <td>{{$assets->firstItem()+$key}}</td>
                            <td>{{$asset->name}}</td>
                            <td>
                                <a href="{{route('admin.edit_asset',$asset->id)}}" class="text-info mr-2"><i class="fa fa-edit"></i></a>
                                <a href="{{route('admin.delete_asset',$asset->id)}}" class="text-danger" onclick="return confirm('Are You sure want to delete asset!')"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                  </table>
                </div>
                  {{$assets->links()}}
                </div>
              </div>
        </div>
    </section>
</div>
@endsection