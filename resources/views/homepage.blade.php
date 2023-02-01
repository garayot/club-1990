@extends('homepage.layouts.app')

@section('content')
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

    </div>
  </div>

  <!-- ======= Header ======= -->
    @include('homepage.includes.nav')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
    @include('homepage.includes.hero')
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
      @include('homepage.includes.about')
    <!-- End Why Us Section -->

    <!-- ======= Events Section ======= -->
      @include('homepage.includes.events')
    <!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reservation</h2>
          <p>Book a Schedule</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
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
            <!-- <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div> -->
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
          <div class="text-center"><button type="submit">Book Now</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
      @include('homepage.includes.testimonials')
    <!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
      @include('homepage.includes.gallery')
    <!-- End Gallery Section -->

    <!-- ======= Teams Section ======= -->
      @include('homepage.includes.teams')
    <!-- End Teams Section -->

    <!-- ======= Contact Section ======= -->
      @include('homepage.includes.contact')
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    @include('homepage.includes.footer')
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection