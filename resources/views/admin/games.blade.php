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
                  <h3 class="card-title ">All Games</h3>
                  {{-- <div class="card-tools d-flex mt-1">
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
                </div> --}}
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table ">
                    <thead>
                      <tr>
                        <th >#</th>
                        <th>Email</th>
                        <th>Game_id</th>
                        <th>Selected</th>
                        <th>Amount</th>
                        <th>Result</th>
                        <th style="min-width:120px;">Date</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                        @if (!empty($games))
                        @foreach ($games as $key=>$game)
                        <tr>
                            <td>{{$games->firstItem()+$key}}</td>
                            <td>{{$game->email}}</td>
                            <td>{{$game->game_id}}</td>
                            <td>{{$game->color}}</td>
                            <td>${{$game->bet}}</td>
                            <td>{{$game->result}}</td>
                            <td>{{$game->created_at}}</td>
                            
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                  </table>
                </div>
                  {{$games->links()}}
                </div>
              </div>
        </div>
    </section>
</div>
@endsection