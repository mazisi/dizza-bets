@extends('layouts.app')
@section('content')
<section class="dashboard-content">
    <div class="overlay">
        <div class="container">
            <div class="row justify-content-center" style="background: #fff; height: 150vh; padding-top: 20px; border-radius: 20px;">
                
                <div class="col-xl-9 col-lg-8">
              <h4 style="color: #000; text-align:center">Pools and Matches - {{ $pool->name }}</h4>
                  <table class="table table-striped table-hovern text-dark">
                    <thead>
                  <tr>
                    <th scope="col">Matches</th>
                    <th scope="col">Team A</th>
                    <th scope="col">V</th>
                    <th scope="col">Team B</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($fixtures as $fixture)

@php
 $getMSeries = App\Http\Controllers\HomeController::getMSeries($fixture["data"]['id']);
@endphp
                      <tr class="text-dark">
                        <th scope="row">{{ $getMSeries }}</th>
                        <td>
                          <div>{{ $fixture["data"]["localTeam"]["data"]["name"] }}</div>
                         
                          <div>
                            <span class="badge rounded-pill bg-primary">D</span>
                            <span class="badge rounded-pill bg-success">W</span>
                            <span class="badge rounded-pill bg-success">W</span>
                          </div>
                        </td>
                        <td>
                        <div> 18:45</div>
                        <a href="{{ route('view_head_to_head',$fixture["data"]["id"]) }}">View H2H</a>
                        </td>
                        <td>
                          <div>{{ $fixture["data"]["visitorTeam"]["data"]["name"] }}</div>
                          <div>
                            <span class="badge rounded-pill bg-danger">L</span>
                            <span class="badge rounded-pill bg-success">W</span>
                            <span class="badge rounded-pill bg-success">W</span>
                          </div>
                        </td>
                      </tr>
                  @empty
                      
                  @endforelse
                  
                 
                </tbody>
              
                </table>

        </div>
    </div>
</section>
@endsection