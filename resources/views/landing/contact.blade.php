@extends('landing.layouts.index')
@section('contents')

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
  
          <div class="section-title">
            <h2><span>Contact</span> Us</h2>
            <p>{{ $contact->description }}</p>
          </div>
        </div>
  
        <div class="map">
          <iframe style="border:0; width: 100%; height: 350px;" src="{{ $contact->map_link }}" frameborder="0" allowfullscreen></iframe>
        </div>
  
        <div class="container mt-5">
  
          <div class="info-wrap">
            <div class="row">
              <div class="col-lg-3 col-md-6 info">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>{{ $contact->address }}</p>
              </div>
  
              <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>{{ $setting->open_time }}</p>
              </div>
  
              <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{ $contact->email }}</p>
              </div>
  
              <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>{{ $setting->phone }}</p>
              </div>
            </div>
          </div>
  
          <form action="{{ route('message.store') }}" method="post" class="php-email-form">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="{{ old('name') }}" >
                @error('name')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" >
                @error('email')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}" >
              @error('subject')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" >{{ old('message') }}</textarea>
              @error('message')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            
            <div class="text-center">
              <button type="submit">Send Message</button>
            </div>
          </form>
  
        </div>
      </section><!-- End Contact Section -->
  
@endsection