@extends('layouts.main')

@section('content')

<!-- Breadcromb Area Start -->
<section class="gauto-breadcromb-area section_70">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="breadcromb-box">
                <h3>Tentang Kami</h3>
                <ul>
                   <li><i class="fa fa-home"></i></li>
                   <li><a>Beranda</a></li>
                   <li><i class="fa fa-angle-right"></i></li>
                   <li>Tentang Kami</li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Breadcromb Area End -->
  
  
<!-- About Page Area Start -->
<section class="about-page-area section_70">
    <div class="container">
       <div class="row">
          <div class="col-lg-6">
             <div class="about-page-left">
                <h4>About Us</h4>
                <h3>We are committed to provide safe Ride solutions</h3>
                <p><span>since 2003</span>,Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudi- um lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>
                <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.litterarum formas humanitatis per seacula quarta decima et quinta decima</p>
                <div class="about-page-call">
                   <div class="page-call-icon">
                      <i class="fa fa-phone"></i>
                   </div>
                   <div class="call-info">
                      <p>Hubungi Kami</p>
                      <h4><a href="https://wa.link/olxb9z" target="_blank">+62 823-6687-6767</a></h4>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-6">
             <div class="about-page-right">
                <img src="{{asset ('gauto/assets/img/service-details-1.jpg')}}" alt="about page" />
             </div>
          </div>
       </div>
    </div>
 </section>

<section class="gauto-about-promo section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="about-promo-text">
               <h3>We are proud of our business. <span>Rent Car</span> Now!</h3>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="about-promo-image">
               <img src="{{asset ('gauto/assets/img/cars 2.png')}}" alt="about promo" />
            </div>
         </div>
      </div>
   </div>
</section>
 <!-- About Page Area End -->

@endsection