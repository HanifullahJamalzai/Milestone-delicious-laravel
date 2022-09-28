@extends('landing.layouts.index')
@section('contents')

    {{-- Slider --}}
    @include('landing.layouts.partials.slider')

     <!-- ======= Whu Us Section ======= -->
      <section id="why-us" class="why-us">
        <div class="container">

          <div class="section-title">
            <h2>Why choose <span>Our Restaurant</span></h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
            </div>
            
            <div class="row">
              
              @foreach ($wcu as $key => $item)
                <div class="col-lg-4">
                  <div class="box">
                    <span>0{{ ++$key }}</span>
                    <h4>{{ $item->title }}</h4>
                  <p>{{ $item->description }}</p>
                </div>
              </div>
            @endforeach
  
            
          </div>
  
        </div>
      </section>
      <!-- End Whu Us Section -->
  
  
      <!-- ======= Gallery Section ======= -->
      <section id="gallery" class="gallery">
        <div class="container-fluid">
  
          <div class="section-title">
            <h2>Some photos from <span>Our Restaurant</span></h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
          </div>
  
          <div class="row g-0">
  
            @foreach ($photos as $photo)
                
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="#" class="gallery-lightbox">
                  <img src="{{ $photo->photo }}" alt="" class="img-fluid">
                </a>
              </div>
            </div>
            
            @endforeach
          </div>
  
        </div>
      </section>
      <!-- End Gallery Section -->
  

      <!-- ======= Chefs Section ======= -->
      <section id="chefs" class="chefs">
        <div class="container">
  
          <div class="section-title">
            <h2>Our Proffesional <span>Chefs</span></h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
          </div>
  
          <div class="row">
  
            @foreach ($cooks as $cook)
                
              <div class="col-lg-4 col-md-6">
                <div class="member">
                  <div class="pic"><img src="{{ $cook->photo }}" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>{{ $cook->name }}</h4>
                    <span>{{ $cook->position }}</span>
                  </div>
                </div>
              </div>
            
            @endforeach

          </div>
  
        </div>
      </section>
      <!-- End Chefs Section -->
  
      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
        <div class="container position-relative">
  
          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
  
              @foreach ($testimonials as $testimonial)
                  
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="{{ $testimonial->photo }}" class="testimonial-img" alt="">
                    <h3>{{ $testimonial->name }}</h3>
                    <h4>{{ $testimonial->position }}</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      {{  $testimonial->description }}
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->
              
              @endforeach
              </div><!-- End testimonial item -->
  
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
      </section>
      
      <!-- End Testimonials Section -->
  


@endsection