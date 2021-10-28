@extends('layouts.frontend')

@section('judul', 'Home')

@section('content')
<main>

    <div id="slideBerita" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#slideBerita" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#slideBerita" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#slideBerita" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        @foreach ($news as $new)
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

            <div class="container">
              <div class="carousel-caption text-start">
                <h1>{{ $new->title }}</h1>
                <p>{{ $new->content }}</p>
                <p>{{ $new->created_at }} </p>
                <p><a class="btn btn-lg btn-primary" href="#">Read More..</a></p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#slideBerita" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#slideBerita" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">

        @foreach ($news as $new)
        <div class="col-lg-4">
            <img src="{{ $new->image }}" alt="{{ $new->image }}" width="140" height="140">
            <h2>{{ $new->title }}</h2>
            <p>{{ $new->content }} </p>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        @endforeach

      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      @foreach ($news as $new)
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7 {{ $loop->index % 2 == 0 ? 'order-md-2' : '' }}">
          <h2 class="featurette-heading">{{ $new->title }} <span class="text-muted">It’ll blow your mind.</span></h2>
          <p class="lead">{{ $new->content }}</p>
        </div>
        <div class="col-md-5">
          {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> --}}
          <img src="{{ Storage::url($new->image) }}" alt="{{ $new->image }}" width="500" height="500">
        </div>
      </div>
      @endforeach
      <hr class="featurette-divider">
      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
  </main>
@endsection
