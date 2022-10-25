@extends('layouts.main')
@section('dash-content')
<section class="how-it-works">
  <div class="overlay pt-120 pb-120">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="section-header text-center">
                      <h5 class="sub-title">Get to Know</h5>
                      <h2 class="title">How Bitbetio Works?</h2>
                      <p>Our platform has been designed from the ground up to be tailored to the unique form of
                          betting and settlement offered by the blockchain. Follow these simple steps and make
                          profits!</p>
                  </div>
              </div>
          </div>
          <div class="main-content">
              <div class="row justify-content-between align-items-center">
                  @livewire('nav')
                  <div class="col-lg-7">
                      <div class="tab-content">
                          <div class="tab-pane fade show active" id="sport" role="tabpanel"
                              aria-labelledby="sport-tab">
                              <div class="d-flex">
                                <h4>Pools</h4>
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal" 
                                 class="float-end btn btn-sm btn-success">Add</button>
                              </div>
                              @livewire('poool')
                          </div>
                          <div class="tab-pane fade" id="match" role="tabpanel" aria-labelledby="match-tab">
                              <h4>Select a Match</h4>
                              <div class="img-area">
                                  <img src="assets/images/process-img-2.png" alt="image">
                              </div>
                          </div>
                          <div class="tab-pane fade" id="team" role="tabpanel" aria-labelledby="team-tab">
                              <h4>Select a Team</h4>
                              <div class="img-area">
                                  <img src="assets/images/process-img-3.png" alt="image">
                              </div>
                          </div>
                          <div class="tab-pane fade" id="odds" role="tabpanel" aria-labelledby="odds-tab">
                              <h4>Select Odds</h4>
                              <div class="img-area">
                                  <img src="assets/images/process-img-4.png" alt="image">
                              </div>
                          </div>
                          <div class="tab-pane fade" id="amount" role="tabpanel" aria-labelledby="amount-tab">
                              <h4>Select Bet Amount </h4>
                              <div class="img-area">
                                  <img src="assets/images/process-img-5.png" alt="image">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="counter-section">
          <div class="container pt-120">
              <div class="row cus-mar">
                  <div class="col-xl-4 col-md-6">
                      <div class="single-area d-flex align-items-center">
                          <div class="img-area">
                              <img src="assets/images/icon/counter-icon-1.png" alt="image">
                          </div>
                          <div class="text-area">
                              <h3 class="m-none"><span>€</span><span class="counter">1304,941</span></h3>
                              <p>Paid Out Prize in Total</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                      <div class="single-area d-flex align-items-center">
                          <div class="img-area">
                              <img src="assets/images/icon/counter-icon-2.png" alt="image">
                          </div>
                          <div class="text-area">
                              <h3 class="m-none"><span class="counter">76,752</span></h3>
                              <p>Winners</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                      <div class="single-area d-flex align-items-center">
                          <div class="img-area">
                              <img src="assets/images/icon/counter-icon-3.png" alt="image">
                          </div>
                          <div class="text-area">
                              <h3 class="m-none"><span class="counter">4,392</span></h3>
                              <p>Players online</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

 @livewire('create-pool')
</div>
</section>
@endsection