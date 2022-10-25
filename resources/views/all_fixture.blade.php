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
            @livewire('fixtures')
        </div>
    </section>

@endsection