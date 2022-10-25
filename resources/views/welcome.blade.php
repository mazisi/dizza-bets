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
        <div class="container">
            <div class="row justify-content-center" style="background: #fff; height: 100vh; padding-top: 20px; border-radius: 20px;">
                
                <div class="col-xl-9 col-lg-8">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="dashboard" role="tabpanel"
                            aria-labelledby="dashboard-tab">
                            <div class="bets-tab">
                                <div class="d-flex">
                                    <ul class="nav" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="cmn-btn active" id="open-playing-tab"
                                                data-bs-toggle="tab" data-bs-target="#open-playing" type="button"
                                                role="tab" aria-controls="open-playing" aria-selected="true">
                                                ALL</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="cmn-btn" id="canceled-tab" data-bs-toggle="tab"
                                                data-bs-target="#canceled" type="button" role="tab"
                                                aria-controls="canceled" aria-selected="false">LIVE</button>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="bet-this-game">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="open-playing" role="tabpanel"
                                            aria-labelledby="open-playing-tab">
                                            <div class="single-area">
                                                <div class="table-area">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                         
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                               
                                                                <td><div class="time">
                                                                    <i class="fas fa-basketball-ball"></i>
                                                                </div></td>
                                                                <td>
                                                                    <div class="head-div">
                                                                        <h5>England</h5>
                                                                        <h5>Premier League</h5>

                                                                        
                                                                    </div>
                                                                </td>
                                                                
                                                               
                                                            </tr>

                                                         
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                         
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                               
                                                                <td><div class="time">20:30</div></td>
                                                                <td>
                                                                    <div class="location-div">
                                                                        <h5>AFC Bournemouth</h5>
                                                                        <h5>Southampton</h5>

                                                                        
                                                                    </div>
                                                                </td>
                                                                
                                                                <td>
                                                                    <div class="icon-div">
                                                                        <i class="far fa-bell"></i>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                             <tr>
                                                               
                                                                <td><div class="time">21:30</div></td>
                                                                <td>
                                                                    <div class="location-div">
                                                                        <h5>Brentford</h5>
                                                                        <h5>Southampton</h5>

                                                                        
                                                                    </div>
                                                                </td>
                                                                
                                                                <td>
                                                                    <div class="icon-div">
                                                                        <i class="far fa-bell"></i>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                         
                                                         
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="canceled" role="tabpanel"
                                            aria-labelledby="canceled-tab">
                                            <div class="single-area">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="tab-pane fade" id="my-bets" role="tabpanel" aria-labelledby="my-bets-tab">
                            <div class="bets-tab">
                                <div class="d-flex">
                                    <ul class="nav" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="cmn-btn active" id="open-playing-tab"
                                                data-bs-toggle="tab" data-bs-target="#open-playing" type="button"
                                                role="tab" aria-controls="open-playing" aria-selected="true">
                                                ALL</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="cmn-btn" id="canceled-tab" data-bs-toggle="tab"
                                                data-bs-target="#canceled" type="button" role="tab"
                                                aria-controls="canceled" aria-selected="false">LIVE</button>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="bet-this-game">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="open-playing" role="tabpanel"
                                            aria-labelledby="open-playing-tab">
                                            <div class="single-area">
                                                <div class="table-area">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                         
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                               
                                                                <td><div class="time">
                                                                    <i class="fas fa-basketball-ball"></i>
                                                                </div></td>
                                                                <td>
                                                                    <div class="head-div">
                                                                        <h5>England</h5>
                                                                        <h5>Premier League</h5>

                                                                        
                                                                    </div>
                                                                </td>
                                                                
                                                               
                                                            </tr>

                                                         
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                         
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                               
                                                                <td><div class="time">20:30</div></td>
                                                                <td>
                                                                    <div class="location-div">
                                                                        <h5>AFC Bournemouth</h5>
                                                                        <h5>Southampton</h5>

                                                                        
                                                                    </div>
                                                                </td>
                                                                
                                                                <td>
                                                                    <div class="icon-div">
                                                                        <i class="far fa-bell"></i>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                             <tr>
                                                               
                                                                <td><div class="time">21:30</div></td>
                                                                <td>
                                                                    <div class="location-div">
                                                                        <h5>Brentford</h5>
                                                                        <h5>Southampton</h5>

                                                                        
                                                                    </div>
                                                                </td>
                                                                
                                                                <td>
                                                                    <div class="icon-div">
                                                                        <i class="far fa-bell"></i>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                         
                                                         
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="canceled" role="tabpanel"
                                            aria-labelledby="canceled-tab">
                                            <div class="single-area">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="tab-pane fade" id="deposit" role="tabpanel" aria-labelledby="deposit-tab">
                            <div class="deposit-with-tab">
                               
                            </div>
                        </div>
                        
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection