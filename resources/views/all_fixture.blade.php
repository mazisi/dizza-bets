@extends('layouts.main')
@section('dash-content')
    <!-- Banner Section start -->
    <section class="banner-section inner-banner soccer-bets currency-bet">
        <div class="overlay">
            <div class="banner-content">
                <div class="container">
                    <div class="content-shape">
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <section class="currency-bet-section">
        <div class="overlay pb-120">
            <div class="container">
                <div class="filter-section mb-60">
                    <div class="section-text text-center">
                        <h3>Bet on future currency price</h3>
                    </div>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-area">
                                    <input type="text" placeholder="Filter Coin">
                                    <button class="d-flex align-items-center">
                                        <span class="text-area d-sm-block d-none">
                                            Search
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row cus-mar">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Home</th>
                                        <th scope="col">Away</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Results</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody style="color: #000">
                                    <tr style="color: #000">
                                        <th scope="row">01</th>
                                        <td>
                                            Orlando Pirates
                                        </td>
                                        <td>
                                            Kaizer Chiefs
                                        </td>
                                        <td>2022-09-09</td>
                                        <td>
                                            Upcoming
                                        </td>
                                        <td><a href="betting-details.html" class="cmn-btn">Bet Now</a></td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                        <div class="row mt-60">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <nav aria-label="Page navigation" class="d-flex justify-content-center">
                                    <ul class="pagination justify-content-center align-items-center">
                                        <li class="page-item">
                                            <a class="page-btn previous" href="javascript:void(0)"
                                                aria-label="Previous">
                                                <img src="assets/images/icon/arrow-left.png" alt="icon">
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link xlr" href="javascript:void(0)">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link xlr active"
                                                href="javascript:void(0)">2</a></li>
                                        <li class="page-item"><a class="page-link xlr" href="javascript:void(0)">3</a>
                                        </li>
                                        <li class="page-item"><a class="page-link xlr" href="javascript:void(0)">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-btn next" href="javascript:void(0)" aria-label="Next">
                                                <img src="assets/images/icon/arrow-right.png" alt="icon">
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection