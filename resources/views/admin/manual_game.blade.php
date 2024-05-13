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
                  <div class="row">
                    <div class="col-6">
                      <h4>Declare Result</h4>
                    </div>
                    <div class="col-6 text-right">
                        <h4 class="time"></h4>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
               
                    <div class="card-body">
                        <form role="form" method="post" action="{{route('admin.setResult')}}">
                            @csrf
                          <div class="col-md-6">
                            <input type="hidden" class="minute" name="minute" >
                            <input type="hidden" class="second" name="second" >
                              <div class="form-group">
                                <label>Game Id</label>
                                <input type="text" class="form-control"  name="game_id" value="{{ isset($game_id) ? $game_id->game_id:''}}" readonly>
                              </div>
                              <div class="form-group">
                                <label>Choose Color</label>
                                <select name="color" class="form-control" >
                                  <option value="Blue">Blue</option>
                                  <option value="Red">Red</option>
                                  <option value="Green">Green</option>
                                  <option value="Yellow">Yellow</option>
                                </select>
                              </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                      </div>

                      <div class="my-3 text-center">
                        <h5>Game Bets</h5>
                        <div class="row">
                          <div class="col">
                            <button class="btn btn-sm btn-primary px-5 py-3"></button>
                            <h5>₹{{$blue_bet != null ? $blue_bet: 0}}</h5>
                          </div>
                          <div class="col">
                            <button class="btn btn-sm btn-danger px-5 py-3"></button>
                            <h5>₹{{$red_bet != null ? $red_bet: 0}}</h5>
                          </div>
                          <div class="col">
                            <button class="btn btn-sm btn-success px-5 py-3"></button>
                            <h5>₹{{$green_bet != null ? $green_bet: 0}}</h5>
                          </div>
                          <div class="col">
                            <button class="btn btn-sm btn-warning px-5 py-3"></button>
                            <h5>₹{{$yellow_bet != null ? $yellow_bet: 0}}</h5>
                          </div>
                        </div>
                          
                      </div>
              </div>

              

              @if (!empty($results))
              <div class="card my-3">
                <div class="card-header">
                  <h4>Game Results</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Game Id</th>
                            <th>Result</th>
                          </tr>
                        </thead>
                        <tbody>
                           @foreach ($results as $key=>$result)
                           <tr>
                            <td>{{$results->firstItem()+$key}}</td>
                            <td>{{$result->game_id}}</td>
                            <td>{{($result->color == "Green") ? "🟢": ($result->color == "Red"? "🔴":($result->color == "Yellow"?"🟠":"🔵"))}}</td>
                           </tr>
                           @endforeach   
                        </tbody>
                      </table>
                      {{$results->links()}}
                    </div>
                  </div>
                </div>
                @endif
        </div>


    </section>
</div>

<script>
   setInterval(function () {
            var now = new Date().getTime();
            var end_time = "{{$timer->end_time}}";
            var distance = end_time - now;
            var m = Math.floor(distance % (1000 * 60 * 60)) / (1000 * 60);
             var minutes = parseFloat(m).toFixed(0);
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            $(".time").html("");
            $(".minute").val("");
            $(".second").val("");

            if(seconds < 0){
              minutes = '0';
              seconds = '00';
              window.location.reload();
            }
            if(seconds < 10){
              seconds = "0"+seconds;
            }

            if (seconds > 29) {
                minutes -= 1;
            }
            
            $(".time").append("0"+minutes+ ":" + seconds);
            $(".minute").val(minutes);
            $(".second").val(seconds);

            if (distance < 0) {
                if (distance < -1000 * 60 * 24 * 1) {
                    countDownDate += 1000 * 60 * 60 * 24 * 1 * 365;
                }
            }
        }, 1000);
  </script>
@endsection