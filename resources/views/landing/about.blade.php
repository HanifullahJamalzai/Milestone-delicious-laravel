@extends('landing.layouts.index')

@section('contents')

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container-fluid">
  
          <div class="row">
  
            <div class="col-lg-5 align-items-stretch video-box" style='background-image: url({{ $hero->photo }});'>
              <a href="{{ $hero->youtube_link }}" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            </div>
  
            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
  
              <div class="content">
                {!! $hero->description !!}
              </div>
  
            </div>
  
          </div>
  
        </div>
      </section>
      
      <!-- End About Section -->

@endsection