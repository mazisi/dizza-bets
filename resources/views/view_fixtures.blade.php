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
            <div class="row justify-content-center" style="background: #fff; height: 150vh; padding-top: 20px; border-radius: 20px;">
                
                <div class="col-xl-9 col-lg-8">
                   <div class="container d-flex col-12">
                    <div class="col-3 border "> 
                      <img class="text-center mx-5 w-12" width="100" height="59" src="https://upload.wikimedia.org/wikipedia/en/thumb/0/0c/Liverpool_FC.svg/1200px-Liverpool_FC.svg.png" alt="">
                       <p class="text-center">liverpool</p>
                    </div>
                    <div class="col-5 mx-5">
                      <p class="text-center">19.10.2022 20.30</p>
                    </div>
                    <div class="col-3 border ">
                      <img class="mx-5"width="100" height="59" src="https://upload.wikimedia.org/wikipedia/en/thumb/0/0c/Liverpool_FC.svg/1200px-Liverpool_FC.svg.png" alt="">
                      <p class="text-center">liverpool</p>
                    </div>
                   </div>

                   <div class="d-flex ">
                    <ul class="d-flex m-3">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link bg-white text-dark" id="deposit-tab" data-bs-toggle="tab"
                            data-bs-target="#deposit" type="button" role="tab" aria-controls="deposit"
                            aria-selected="false">SUMMURY</button>
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
                    <p>LAST MATCHES-LIVERPOOL</p>
                  </div> 
                  
                  <div class="table-responsive">
                    <table class="table ">
                        <thead>
                         
                        </thead>
                        <tbody>
                            <tr>
                                <td><div class="time">16.12.2022</div></td>
                                <td>
                                    <div class="location">
                                        <P>  <img class="m-7"width="15" height="10" src="https://upload.wikimedia.org/wikipedia/en/thumb/0/0c/Liverpool_FC.svg/1200px-Liverpool_FC.svg.png" alt=""> Liverpool</P>
                                        <P>  <img class="m-7"width="15" height="10" src="https://upload.wikimedia.org/wikipedia/sco/e/eb/Manchester_City_FC_badge.svg" alt=""> Manchester City</P> 
                                    </div>
                                </td>
                                <td>
                                  <div>
                                    <P> 1</P>
                                    <P> 0</P>
                                  </div>
                              </td>
                                <td>
                                    <div >
                                      <button type="button" class="btn btn-success">W</button>
                                    </div>
                                </td>
                            </tr>

                             <tr>
                                <td><div class="time">16.12.2022</div></td>
                                <td>
                                    <div class="location">
                                      <P>  <img class="m-7"width="15" height="10" src="https://upload.wikimedia.org/wikipedia/en/thumb/4/43/Rangers_FC.svg/1200px-Rangers_FC.svg.png" alt=""> Rangers</P>
                                      <P>  <img class="m-7"width="15" height="10" src="https://upload.wikimedia.org/wikipedia/en/thumb/0/0c/Liverpool_FC.svg/1200px-Liverpool_FC.svg.png" alt=""> Liverpool</P>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="icon">
                                      <P> 1</P>
                                      <P> 7</P>
                                    </div>
                                </td>

                                <td>
                                    <div class="icon">
                                      <button type="button" class="btn btn-success">W</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                              <td><div class="time">16.12.2022</div></td>
                              <td>
                                  <div class="location">
                                      <P>  <img class="m-7"width="15" height="10" src="https://upload.wikimedia.org/wikipedia/en/thumb/5/53/Arsenal_FC.svg/1200px-Arsenal_FC.svg.png" alt=""> Asenal</P>
                                      <P>  <img class="m-7"width="15" height="10" src="https://upload.wikimedia.org/wikipedia/en/thumb/0/0c/Liverpool_FC.svg/1200px-Liverpool_FC.svg.png" alt=""> Liverpool</P> 
                                  </div>
                              </td>
                              <td>
                                <div class="icon">
                                  <P> 3</P>
                                  <P> 2</P>
                                </div>
                            </td>
                              <td>
                                  <div class="icon">
                                    <button type="button" class="btn btn-danger">L</button>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                            <td><div class="time">16.12.2022</div></td>
                            <td>
                                <div class="location">
                                    <P>  <img class="m-7"width="15" height="10" src="https://upload.wikimedia.org/wikipedia/en/thumb/0/0c/Liverpool_FC.svg/1200px-Liverpool_FC.svg.png" alt=""> Liverpool</P>
                                    <P>  <img class="m-7"width="15" height="10" src="https://upload.wikimedia.org/wikipedia/en/thumb/4/43/Rangers_FC.svg/1200px-Rangers_FC.svg.png" alt=""> Rangers</P>
                                </div>
                            </td>
                            <td>
                              <div class="icon">
                                <P> 2</P>
                                <P> 0</P>
                              </div>
                          </td>
                            <td>
                                <div class="icon">
                                  <button type="button" class="btn btn-success">W</button>
                                </div>
                            </td>
                        </tr>
                        
                        </tbody>
                    </table>
                </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection