@extends('front.layouts.master')
@section('content') 
 <!-- Page Content -->
 <div class="page-heading about-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>about us</h4>
            <h2>our company</h2>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="best-features about-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Our Background</h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="right-image">
            <img src="{{asset('fronttema')}}/assets/images/feature-image.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="left-content">
            <h4>Who we are &amp; What we do?</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis.</p>
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="team-members">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Ekip Arkadaşlarımız</h2>
          </div>
        </div>
          @foreach ($teams as $team )
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="{{$team->photo}}" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>{{$team->name}}</h4>
                <span>{{$team->department}}</span>
                <p>{{$team->info}}</p>
              </div>
            </div>
          </div> 
          @endforeach
     
      </div>
    </div>
  </div>


  <div class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="service-item">
            <div class="icon">
              <i class="fa fa-gear"></i>
            </div>
            <div class="down-content">
              <h4>Product Management</h4>
              <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p>
              <a href="#" class="filled-button">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-item">
            <div class="icon">
              <i class="fa fa-gear"></i>
            </div>
            <div class="down-content">
              <h4>Customer Relations</h4>
              <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p>
              <a href="#" class="filled-button">Details</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-item">
            <div class="icon">
              <i class="fa fa-gear"></i>
            </div>
            <div class="down-content">
              <h4>Global Collection</h4>
              <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p>
              <a href="#" class="filled-button">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="happy-clients">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Happy Partners</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div class="owl-clients owl-carousel">
            <div class="client-item">
              <img src="{{asset('fronttema')}}/assets/images/client-01.png" alt="1">
            </div>
            
            <div class="client-item">
              <img src="{{asset('fronttema')}}/assets/images/client-01.png" alt="2">
            </div>
            
            <div class="client-item">
              <img src="{{asset('fronttema')}}/assets/images/client-01.png" alt="3">
            </div>
            
            <div class="client-item">
              <img src="{{asset('fronttema')}}/assets/images/client-01.png" alt="4">
            </div>
            
            <div class="client-item">
              <img src="{{asset('fronttema')}}/assets/images/client-01.png" alt="5">
            </div>
            
            <div class="client-item">
              <img src="{{asset('fronttema')}}/assets/images/client-01.png" alt="6">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection