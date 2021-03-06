@extends('layouts.main')

@section('content')
              
<!-- Slider Area Start -->
<section class="gauto-slider-area fix">
   <div class="gauto-slide owl-carousel">
      <div class="gauto-main-slide slide-item-1">
         <div class="gauto-main-caption">
            <div class="gauto-caption-cell">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="slider-text">
                           <p>Harga mulai Rp.250.000 / hari</p>
                           <h2>Mobil Aman dan Nyaman</h2>
                           
                           <a href="https://wa.link/olxb9z" target="_blank" class="gauto-btn">Pesan Sekarang</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="gauto-main-slide slide-item-2">
         <div class="gauto-main-caption">
            <div class="gauto-caption-cell">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="slider-text">
                           <p>Pilihan Mobil Banyak</p>
                           <h2>Melayani di seluruh kota</h2>
                           <a href="https://wa.link/olxb9z" target="_blank" class="gauto-btn">Pesan Sekarang</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Slider Area End -->
   
<!-- About Area Start -->
<section class="gauto-about-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="about-left">
               <h4>Tentang Kami</h4>
               <h2>Selamat Datang di Penara Rent Car</h2>
               <p>Penara Rent Car adalah solusi kebutuhan transportasi Anda. Kami merupakan perusahaan yang bergerak dibidang jasa sewa kendaraan / rental mobil yang berpengalaman. Berdiri sejak tahun 2017 dan telah memiliki banyak pelanggan di seluruh Indonesia.</p>
               <div class="about-list">
                  <ul>
                     <li><i class="fa fa-check"></i>Berpengalaman Sejak 2017.</li>
                     <li><i class="fa fa-check"></i>Berbagai Macam Pilihan Kendaraan.</li>
                     <li><i class="fa fa-check"></i>Kendaraan Bersih & Terawat.</li>
                     <li><i class="fa fa-check"></i>Driver Berpengalaman & Santun.</li>
                     <li><i class="fa fa-check"></i>Melayani Seluruh Indonesia.</li>
                  </ul>
               </div>
               <div class="about-signature">
                  <div class="signature-left">
                     <img src="{{asset ('gauto/assets/img/signature.png')}}" alt="signature" />
                  </div>
                  <div class="signature-right">
                     <h3>Irfansyah</h3>
                     <p>Owner</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="about-right">
               <img src="{{asset ('gauto/assets/img/about-2.jpeg')}}" alt="car" />
            </div>
         </div>
      </div>
   </div>
</section>
<!-- About Area End -->

<!-- Offers Area Start -->
<section class="gauto-offers-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-heading">
               <h4>Pilihan Mobil</h4>
               <h2>Aman dan Nyaman</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="offer-tabs">
               
               <div class="tab-content" id="offerTabContent">
                  <!-- All Tab Start -->
                  <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                     <div class="row">
                        @foreach ($cars as $car)                            
                           <div class="col-lg-4">
                              <div class="single-offers">
                                 <div class="offer-image">
                                     <a href="#">                                                                                                                       
                                       <img src="{{asset ($car->car_images[0]->path) }}" />
                                     </a>
                                 </div>
                                 <div class="offer-text">
                                     <a href="#">
                                         <h3>{{ $car->brand->name }} {{ $car->name }}</h3>
                                     </a>
                                     <h4>Rp{{ number_format($car->price) }}<span>/ Hari</span></h4>
                                     <ul>
                                         @foreach ($car->car_features as $car_feature)
                                             @if ($loop->index < 3)
                                                 
                                                 <li><i class="{{ $car_feature->icon_class }}"></i> {{ $car_feature->title }}</li>
                                                 
                                             @endif
                                         @endforeach
                                         
                                     </ul>
                                     <div class="offer-action">
                                         <a href="https://wa.link/olxb9z" target="_blank" class="offer-btn-1"><i>Booking</i></a>
                                         <a href="{{ route('car.detail',$car->id) }}" class="offer-btn-2">Detail</a>
                                     </div>
                                 </div>
                             </div>
                           </div>
                        @endforeach
                        
                     </div> 
                     <div class="row">
                        <div class="col-md-12">
                           <div class="load-more">
                              <a href="{{ route('car.list') }}" class="gauto-btn">Tampilkan Semua Mobil</a>   
                           </div>
                        </div>
                     </div>                     
                  </div>
                  <!-- All Tab End -->                                       
                     
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Offers Area End -->  
   
<!-- Testimonial Area Start -->
<section class="gauto-testimonial-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-heading">
               <h4>Apa Kata Pelanggan Kami?</h4>
               <h2>Testimoni</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="testimonial-slider owl-carousel">
               <div class="single-testimonial">
                  <div class="testimonial-text">
                     <p>"Mobilnya bersih dan nyaman, enak untuk dibawa keluar kota."</p>
                     <div class="testimonial-meta">
                        {{-- <div class="client-image">
                           <img src="{{asset ('gauto/assets/img/testimonial.jpg')}}" alt="testimonial" />
                        </div> --}}
                        <div class="client-info">
                           <h3>Daeng Lolo</h3>
                           <p>Makassar</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="single-testimonial">
                  <div class="testimonial-text">
                     <p>"Harga sesuai pasaran, pemiliknya ramah, dan tidak ribet saat booking mobil."</p>
                     <div class="testimonial-meta">
                        {{-- <div class="client-image">
                           <img src="{{asset ('gauto/assets/img/testimonial-2.jpg')}}" alt="testimonial" />
                        </div> --}}
                        <div class="client-info">
                           <h3>Aprizal Nuri</h3>
                           <p>Medan</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="single-testimonial">
                  <div class="testimonial-text">
                     <p>"Drivernya enak bawa mobilnya, bersih mobilnya dan pelayanannya sangat baik"</p>
                     <div class="testimonial-meta">
                        {{-- <div class="client-image">
                           <img src="{{asset ('gauto/assets/img/testimonial.jpg')}}" alt="testimonial" />
                        </div> --}}
                        <div class="client-info">
                           <h3>Muh. Fahmi</h3>
                           <p>Jakarta</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="single-testimonial">
                  <div class="testimonial-text">
                     <p>"Pelayananya memuaskan, antar jemput tepat waktu, supirnya juga baik dan ramah"</p>
                     <div class="testimonial-meta">
                        {{-- <div class="client-image">
                           <img src="{{asset ('gauto/assets/img/testimonial.jpg')}}" alt="testimonial" />
                        </div> --}}
                        <div class="client-info">
                           <h3>Bu Marnia</h3>
                           <p>Medan</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Testimonial Area End -->
   
<!-- Call Area Start -->
<section class="gauto-driver-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="call-box">
               <div class="call-box-inner">
                  <h2>Melayani <span>50+</span> Kota di Indonesia</h2>
                  <p>PENARA melayani lebih dari 50 Kota di Indonesia, Anda dapat memesan Mobil Kami dimanapun dan kapanpun.<br>PENARA Buka 24 Jam Non-Stop</p>
                  
                  
                  <div class="call-number">
                     <div class="call-icon">
                        <i class="fa fa-phone"></i>
                     </div>
                     <div class="call-text">
                        <p>Butuh Mobil Sekarang Juga?</p>
                        <h4><a href="https://wa.link/olxb9z" target="_blank">+62 823-6687-6767</a></h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Call Area End -->   
   
<!-- Blog Area Start 
<section class="gauto-blog-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-heading">
               {{-- <h4>Blog</h4> --}}
               <h2>Artikel</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-4">
            <div class="single-blog">
               <div class="blog-image">
                  <a href="#">
                  <img src="{{asset ('gauto/assets/img/blog-1.jpg')}}" alt="blog 1" />
                  </a>
               </div>
               <div class="blog-text">
                  <h3><a href="#">if Your Car's bettery down.</a></h3>
                  <div class="blog-meta-home">
                     <div class="blog-meta-left">
                        <p>July 13, 09:43 am</p>
                     </div>
                     <div class="blog-meta-right">
                        <p><i class="fa fa-eye"></i> 322</p>
                        <p><i class="fa fa-commenting"></i> 67</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="single-blog">
               <div class="blog-image">
                  <a href="#">
                  <img src="{{asset ('gauto/assets/img/blog-2.jpg')}}" alt="blog 1" />
                  </a>
               </div>
               <div class="blog-text">
                  <h3><a href="#">How often is a taxi used?</a></h3>
                  <div class="blog-meta-home">
                     <div class="blog-meta-left">
                        <p>July 13, 09:43 am</p>
                     </div>
                     <div class="blog-meta-right">
                        <p><i class="fa fa-eye"></i> 322</p>
                        <p><i class="fa fa-commenting"></i> 67</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="single-blog">
               <div class="blog-image">
                  <a href="#">
                  <img src="{{asset ('gauto/assets/img/blog-3.jpg')}}" alt="blog 1" />
                  </a>
               </div>
               <div class="blog-text">
                  <h3><a href="#">The best ways to pay Drivers</a></h3>
                  <div class="blog-meta-home">
                     <div class="blog-meta-left">
                        <p>July 13, 09:43 am</p>
                     </div>
                     <div class="blog-meta-right">
                        <p><i class="fa fa-eye"></i> 322</p>
                        <p><i class="fa fa-commenting"></i> 67</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
Blog Area End -->
       
       
@endsection
