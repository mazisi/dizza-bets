@extends('layouts.app')
@section('content')
<section class="dashboard-content">
    <div class="overlay">
        <div class="dashboard-heading">
            <div class="container">
                <div class="row justify-content-lg-center justify-content-between">
                    <div class="col-xl-9 col-lg-12">
                        <ul class="nav" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="dashboard-tab" data-bs-toggle="tab"
                                    data-bs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
                                    aria-selected="true"> <i class="fas fa-futbol"></i> FOOTBALL</button>
                            </li>
                            <li class="nav-item" role="presentation">

                                <button class="nav-link" id="my-bets-tab" data-bs-toggle="tab"
                                    data-bs-target="#my-bets" type="button" role="tab" aria-controls="my-bets"
                                    aria-selected="false"> <i class="fas fa-basketball-ball"></i> SOCCER 6-13</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="deposit-tab" data-bs-toggle="tab"
                                    data-bs-target="#deposit" type="button" role="tab" aria-controls="deposit"
                                    aria-selected="false"><i class="fas fa-basketball-ball"></i> SPORTSTAKE</button>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <style>
          li, p {
    color: #000;
}
        </style>
        <div class="container">
            <div class="row justify-content-center" style="background: #fff; height: 150vh; padding-top: 20px; border-radius: 20px;">
               
                <div class="col-xl-9 col-lg-8">
                   <div class="container d-flex col-12">
                    <div class="col-3 border "> 
                      <img class="text-center mx-5 w-12" width="100" height="59" src="{{ $head_to_head["data"][0]["visitorTeam"]["data"]["logo_path"] }}" alt="">
                       <p class="text-center">{{ $head_to_head["data"][0]["visitorTeam"]["data"]["name"] }}</p>
                    </div>
                    <div class="col-5 mx-5">
                      <p class="text-center">{{ $pool->pool->name }}</p>
                    </div>
                    <div class="col-3 border ">
                      <img class="mx-5"width="100" height="59" src="{{ $head_to_head["data"][0]["localTeam"]["data"]["logo_path"] }}" alt="">
                      <p class="text-center">{{ $head_to_head["data"][0]["localTeam"]["data"]["name"] }}</p>
                    </div>
                   </div>

                   <div class="d-flex ">
                    <ul class="d-flex m-3">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link bg-white text-dark" id="deposit-tab" data-bs-toggle="tab"
                            data-bs-target="#deposit" type="button" role="tab" aria-controls="deposit"
                            aria-selected="false">SUMMARY</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link  bg-white text-dark" id="deposit-tab" data-bs-toggle="tab"
                          data-bs-target="#deposit" type="button" role="tab" aria-controls="deposit"
                          aria-selected="false">ODDS</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link  bg-white text-dark" id="deposit-tab" data-bs-toggle="tab"
                        data-bs-target="#deposit" type="button" role="tab" aria-controls="deposit"
                        aria-selected="false">H2H</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link  bg-white text-dark" id="deposit-tab" data-bs-toggle="tab"
                      data-bs-target="#deposit" type="button" role="tab" aria-controls="deposit"
                      aria-selected="false">STANDINGS</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link  bg-white text-dark" id="deposit-tab" data-bs-toggle="tab"
                    data-bs-target="#deposit" type="button" role="tab" aria-controls="deposit"
                    aria-selected="false">NEWS</button>
            </li>
                    </ul>
                    
                   </div>


                   <div class="d-flex ">
                    <button type="button" class="btn btn-danger m-3">OVERROLL</button>
                    <button type="button" class="btn btn-secondary m-3">LIVERPOOL-HOME</button>
                    <button type="button" class="btn btn-secondary m-3">WEST HAM-AWAY</button>
                  </div>

                  <div class="bg-secondary col-12 P-5">
                    <p>Head To Head</p>
                  </div> 
                  
                  <div class="table-responsive">
                    <table class="table ">
                        <thead>
                         
                        </thead>
                        <tbody>
                          
                          @forelse ($head_to_head["data"] as $head)
                          <tr>
                            <td><div class="time">{{ date('d-m-Y', strtotime($head["time"]["starting_at"]["date_time"])) }}</div></td>
                            <td>
                                <div class="location">
                                    <P>  <img class="m-7"width="15" height="10" src="" alt="">{{$head["localTeam"]["data"]["name"]}}</P>
                                    <P>  <img class="m-7"width="15" height="10" src="" alt="">{{$head["visitorTeam"]["data"]["name"]}}</P> 
                                </div>
                            </td>
                            <td>
                              <div>
                                <P>{{$head["scores"]["localteam_score"] }}</P>
                                <P> {{$head["scores"]["visitorteam_score"]}}</P>
                              </div>
                          </td>
                            <td>
                                <div>
                                  @if (is_null($head["winner_team_id"]))
                                  <button type="button" class="btn btn-warning">D</button>  
                                  @elseif ($head["winner_team_id"] == $head["localteam_id"])
                                  <button type="button" class="btn btn-success">W</button>  
                                  @else
                                  <button type="button" class="btn btn-danger">L</button>   
                                  @endif
                                  
                                </div>
                            </td>
                        </tr>
                          @empty
                              
                          @endforelse
                           

                            
                        
                        </tbody>
                    </table>
                </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection