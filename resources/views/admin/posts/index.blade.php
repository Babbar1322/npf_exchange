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
                  <h3 class="card-title ">All Posts</h3>
                  <div class="ml-auto">
                    <a href="{{route('admin.add_post')}}" class="btn btn-info btn-sm" >Add</a>
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
                        <th>Title</th>
                        <th>Image</th>
                        <th style="min-width:120px;">Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if (!empty($posts))
                        @foreach ($posts as $key=>$post)
                        <tr>
                            <td>{{$posts->firstItem()+$key}}</td>
                            <td>{{$post->title}}</td>
                            <td><a href="{{asset('posts/'.$post->image)}}"><img src="{{asset('posts/'.$post->image)}}" width="50"></a></td>
                            <td>{{$post->created_at}}</td>
                            <td>
                                <a href="{{route('admin.edit_post',$post->id)}}" class="text-info mr-2"><i class="fa fa-edit"></i></a>
                                <a href="{{route('admin.delete_post',$post->id)}}" class="text-danger" onclick="return confirm('Are You sure want to delete post!')"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                  </table>
                </div>
                  {{$posts->links()}}
                </div>
              </div>
        </div>
    </section>
</div>
@endsection