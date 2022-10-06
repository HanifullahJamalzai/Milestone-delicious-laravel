@extends('landing.layouts.index')
@section('contents')

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
        <div class="container">
  
          <div class="section-title">
            <h2>Check our <span>Specials</span></h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
          </div>
  
          <div class="row">
            <div class="col-lg-3">
              <ul class="nav nav-tabs flex-column">
                @foreach ($food as $key =>  $item)
                  <li class="nav-item">
                    <a class="nav-link {{ $key == 0 ? 'active' : '' }} show" data-bs-toggle="tab" href="#{{ $item->name }}">{{ $item->name }}</a>
                  </li>
                @endforeach

              </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
              <div class="tab-content">
                @foreach ($food as $key => $item)
                    
                <div class="tab-pane {{ $key == 0 ? 'active' : '' }} show" id="{{ $item->name }}">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>{{ $item->name }}</h3>
                      <p class="fst-italic">{{ $item->category->name }}</p>
                      <p>{!! $item->description !!}</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="{{ $item->photo }}" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                
                @endforeach

                
              </div>
            </div>
          </div>
  
        </div>
      </section>
      
      <!-- End Specials Section -->

      

    
    
      <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div class="container">
  
          <div class="section-title">
            <h2>Check our tasty <span>Menu</span></h2>
          </div>
  
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="menu-flters">
                <li data-filter="*" class="filter-active">Show All</li>
                <li data-filter=".filter-starters">Starters</li>
                <li data-filter=".filter-salads">Salads</li>
                <li data-filter=".filter-specialty">Specialty</li>
              </ul>
            </div>
          </div>
  
          <div class="row menu-container">
  
            <div class="col-lg-6 menu-item filter-starters">
              <div class="menu-content">
                <a href="#">Lobster Bisque</a><span>$5.95</span>
              </div>
              <div class="menu-ingredients">
                Lorem, deren, trataro, filede, nerada
              </div>
            </div>
  
            <div class="col-lg-6 menu-item filter-specialty">
              <div class="menu-content">
                <a href="#">Bread barrel</a><span>$6.95</span>
              </div>
              <div class="menu-ingredients">
                Lorem, deren, trataro, filede, nerada
              </div>
            </div>
  
            <div class="col-lg-6 menu-item filter-starters">
              <div class="menu-content">
                <a href="#">Crab Cake</a><span>$7.95</span>
              </div>
              <div class="menu-ingredients">
                A delicate crab cake served on a toasted roll with lettuce and tartar sauce
              </div>
            </div>
  
            <div class="col-lg-6 menu-item filter-salads">
              <div class="menu-content">
                <a href="#">Caesar Selections</a><span>$8.95</span>
              </div>
              <div class="menu-ingredients">
                Lorem, deren, trataro, filede, nerada
              </div>
            </div>
  
            <div class="col-lg-6 menu-item filter-specialty">
              <div class="menu-content">
                <a href="#">Tuscan Grilled</a><span>$9.95</span>
              </div>
              <div class="menu-ingredients">
                Grilled chicken with provolone, artichoke hearts, and roasted red pesto
              </div>
            </div>
  
            <div class="col-lg-6 menu-item filter-starters">
              <div class="menu-content">
                <a href="#">Mozzarella Stick</a><span>$4.95</span>
              </div>
              <div class="menu-ingredients">
                Lorem, deren, trataro, filede, nerada
              </div>
            </div>
  
            <div class="col-lg-6 menu-item filter-salads">
              <div class="menu-content">
                <a href="#">Greek Salad</a><span>$9.95</span>
              </div>
              <div class="menu-ingredients">
                Fresh spinach, crisp romaine, tomatoes, and Greek olives
              </div>
            </div>
  
            <div class="col-lg-6 menu-item filter-salads">
              <div class="menu-content">
                <a href="#">Spinach Salad</a><span>$9.95</span>
              </div>
              <div class="menu-ingredients">
                Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
              </div>
            </div>
  
            <div class="col-lg-6 menu-item filter-specialty">
              <div class="menu-content">
                <a href="#">Lobster Roll</a><span>$12.95</span>
              </div>
              <div class="menu-ingredients">
                Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
      
      <!-- End Menu Section -->

      
    
      <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container">
  
          <div class="section-title">
            <h2>Book a <span>Table</span></h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
          </div>
  
          <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-lg-4 col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
  
        </div>
      </section>
      <!-- End Book A Table Section -->
  
  
      
@endsection