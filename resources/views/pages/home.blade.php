@extends('pages.main')

{{-- Custom external CSS --}}
@push('styles')
    {{ Html::style('css/home/styles.css') }}
    {{ Html::style('css/home/header.slider.css') }}
    {{ Html::style('css/home/about-us.css') }}
    {{ Html::style('css/home/our-work.css') }}
@endpush

{{-- Header slider JS --}}
@push('scripts')
    <script src="{{ asset('js/jssor.slider-27.0.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/header.slider.js') }}" type="text/javascript"></script>
@endpush

{{-- Content --}}
@section('content')
    {{-- background image --}}
    <img class="our-work-bg" src="{{ asset('images/our_work_bg.jpg') }}" alt="">
    {{-- Slider & Navigation Bar --}}
    <header>
      {{-- Slider --}}
      @includeif('partials.slider')
      {{-- Navigation Bar --}}
      @parent
    </header>



    {{-- About US Section --}}
    <section class="about-us">
      <div class="container">
        <h2>About US</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
      </div>
    </section>



    {{-- Our Work Section --}}
    <div class="our-work">
      <div class="cover"></div>
      <div class="our-work-panels">
        <h2 class="text-center">OUR WORK</h2><br><br>
        <div class="row">
          <div class="col-md-4">
            <div class="card work-panel">
              <img class="card-img-top" src="http://lorempixel.com/640/400" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. This line will create another line. This line will create another line. This line will create another line...</p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card work-panel">
              <img class="card-img-top" src="http://lorempixel.com/640/400/sports" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. This line will create another line. This line will create another line. This line will create another line...</p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card work-panel">
              <img class="card-img-top" src="http://lorempixel.com/g/640/400" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. This line will create another line. This line will create another line. This line will create another line...</p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
