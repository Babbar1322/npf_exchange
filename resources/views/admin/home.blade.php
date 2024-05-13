@extends('layouts.app')
   
@section('content')
<div class="content-wrapper">
    <section class="content">
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome To Admin Dashboard</div>
                
            </div>
        </div>
    </div> --}}
    <div class="row  pt-5">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Total Users</div>
                <div class="card-body">
                    <h5>{{$users}}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Total Deposit</div>
                <div class="card-body">
                    <h5>₹{{$total_deposit}}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Total Interest</div>
                <div class="card-body">
                    <h5>₹{{$total_interest}}</h5>
                </div>
            </div>
        </div>
      
       
    </div>
</div>
    </section>
</div>
@endsection