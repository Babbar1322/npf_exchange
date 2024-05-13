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
                  <h3 class="card-title ">Pending Withdraws</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table ">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>User Id</th>
                            <th>Full Name</th>
                            <th>Bank User Name</th>
                            <th>Bank Name</th>
                            <th>Bank Account No.</th>
                            <th>Bank IFSC Code</th>
                            <th>Withdrawal Amount </th>
                            <th>Fees 20% </th>
                            <th>Payable Amount </th>
                            <th>Submit Date & Time</th>
                           <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($with))
                        @foreach($with as $key=>$wd)
                        <tr>
                          <td>{{$key+1}}</td>
                        <td>{{$wd->user_id}}</td>
                        <td>{{$wd->name}}</td>
                        <td>{{$wd->bank_user_name}}</td>
                        <td>{{$wd->bank_name}}</td>
                        <td>{{$wd->account_no}}</td>
                        <td>{{$wd->ifsc_code}}</td>
                        <td>{{$wd->amount}}</td>
                        <td>{{0.2*$wd->amount}}</td>
                        <td>{{$wd->amount-0.2*$wd->amount}}</td>
                        <td>{{\Carbon\Carbon::parse($wd->created_at)->format('d/m/Y g:i A')}}</td>
                        <td>
                            @if ($wd->status == "pending")
                            <form method="POST" action="{{route('admin.acceptWd')}}">
                              @csrf
                                <input type="hidden" name="id" value="{{$wd->id}}">
                                <button type="submit" class="btn btn-success" onclick="return confirm('Are You sure want to accept request');">Accept</button>
                            </form>
                            @elseif($wd->status == "accpeted")
                            <div class="text-success"> Accepted</div>
                            @endif
                            @if ($wd->status == "pending")
                            <button type="button" id="reject"  data-target="#rejectModal"  data-toggle="modal" class="btn btn-danger reject" onclick="reject({{$wd->withdraw_id}})">Reject</button>
                            @elseif($wd->status == "rejected")
                            <div class="text-danger"> Rejected</div>
                            @endif                          
                        </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="7" class="text-center py-3 h5"><b>No Withdrawal Found</b></td>
                        </tr>
                        @endif
                    </tbody>
                  </table>
                </div>
                  
                </div>
              </div>
        </div>
    </section>
</div>
<div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Reject Payment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
  
        </div>
        <div class="modal-body">
            <form  method="POST" action="{{route('admin.rejectWd')}}">
                @csrf
                <input type="hidden" id="withdraw_id" name="id" >
                <div class="form-group">
                    <label>Enter Reason</label>
                    <textarea class="form-control" name="remarks" rows="3" placeholder="Enter Reject Reason" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary my-2">Submit</button>
                
            </form>
        </div>
       
      </div>
    </div>
  </div>
<script>
    function reject(id){
        document.getElementById('withdraw_id').value = id;
    }
</script>
@endsection