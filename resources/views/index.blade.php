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
                           <p>Harga mulai Rp.200.000 / hari</p>
                           <h2>Mobil Aman dan Nyaman</h2>
                           <a href="#" class="gauto-btn">Pesan Sekarang</a>
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
                           <a href="#" class="gauto-btn">Pesan Sekarang</a>
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
               <h2>Selamat Datang di Rental Mobil PENARA</h2>
               <p>Penara adalah perusahaan rental mobil yang telah berpengalaman sejak 2015. Kami telah melayani banyak pelanggan Kami di seluruh Indonesia</p>
               <div class="about-list">
                  <ul>
                     <li><i class="fa fa-check"></i>Berpengalaman Sejak 2015</li>
                     <li><i class="fa fa-check"></i>Pilihan Mobil Banyak</li>
                     <li><i class="fa fa-check"></i>Mobil Aman dan Nyaman</li>
                     <li><i class="fa fa-check"></i>Melayani di seluruh Indonesia</li>
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
               <img src="{{asset ('gauto/assets/img/about.png')}}" alt="car" />
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
               <ul class="nav nav-tabs" id="offerTab" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">Seluruh Merk</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="nissan-tab" data-toggle="tab" href="#nissan" role="tab" aria-controls="nissan" aria-selected="false">nissan</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="Toyota-tab" data-toggle="tab" href="#Toyota" role="tab" aria-controls="Toyota" aria-selected="false">Toyota</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="Audi-tab" data-toggle="tab" href="#Audi" role="tab" aria-controls="Audi" aria-selected="false">Audi</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="mercedes-tab" data-toggle="tab" href="#mercedes" role="tab" aria-controls="mercedes" aria-selected="false">mercedes</a>
                  </li>
               </ul>
               <div class="tab-content" id="offerTabContent">
                  <!-- All Tab Start -->
                  <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                     <div class="row">
                        <div class="col-lg-4">
                           <div class="single-offers">
                              <div class="offer-image">
                                 <a href="#">
                                 <img src="{{asset ('gauto/assets/img/offer-toyota.png')}}" alt="offer 1" />
                                 </a>
                              </div>
                              <div class="offer-text">
                                 <a href="#">
                                    <h3>Toyota Alphard</h3>
                                 </a>
                                 <h4>Rp250.000<span>/ Hari</span></h4>
                                 <ul>
                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                 </ul>
                                 <div class="offer-action">
                                    <a href="#" class="offer-btn-1">PESAN</a>
                                    <a href="#" class="offer-btn-2">DETAIL</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="single-offers">
                              <div class="offer-image">
                                 <a href="#">
                                 <img src="{{asset ('gauto/assets/img/nissan-offer.png')}}" alt="offer 1" />
                                 </a>
                              </div>
                              <div class="offer-text">
                                 <a href="#">
                                    <h3>Nissan 370Z</h3>
                                 </a>
                                 <h4>Rp250.000<span>/ Hari</span></h4>
                                 <ul>
                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                 </ul>
                                 <div class="offer-action">
                                    <a href="#" class="offer-btn-1">PESAN</a>
                                    <a href="#" class="offer-btn-2">DETAIL</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="single-offers">
                              <div class="offer-image">
                                 <a href="#">
                                 <img src="{{asset ('gauto/assets/img/audi-offer.png')}}" alt="offer 1" />
                                 </a>
                              </div>
                              <div class="offer-text">
                                 <a href="#">
                                    <h3>Audi Q3</h3>
                                 </a>
                                 <h4>Rp250.000<span>/ Hari</span></h4>
                                 <ul>
                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                 </ul>
                                 <div class="offer-action">
                                    <a href="#" class="offer-btn-1">PESAN</a>
                                    <a href="#" class="offer-btn-2">DETAIL</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-4">
                           <div class="single-offers">
                              <div class="offer-image">
                                 <a href="#">
                                 <img src="{{asset ('gauto/assets/img/bmw-offer.png')}}" alt="offer 1" />
                                 </a>
                              </div>
                              <div class="offer-text">
                                 <a href="#">
                                    <h3>BMW X3</h3>
                                 </a>
                                 <h4>Rp250.000<span>/ Hari</span></h4>
                                 <ul>
                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                 </ul>
                                 <div class="offer-action">
                                    <a href="#" class="offer-btn-1">PESAN</a>
                                    <a href="#" class="offer-btn-2">DETAIL</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="single-offers">
                              <div class="offer-image">
                                 <a href="#">
                                 <img src="{{asset ('gauto/assets/img/audi-offer.png')}}" alt="offer 1" />
                                 </a>
                              </div>
                              <div class="offer-text">
                                 <a href="#">
                                    <h3>Audi Q3</h3>
                                 </a>
                                 <h4>Rp250.000<span>/ Hari</span></h4>
                                 <ul>
                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                 </ul>
                                 <div class="offer-action">
                                    <a href="#" class="offer-btn-1">PESAN</a>
                                    <a href="#" class="offer-btn-2">DETAIL</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="single-offers">
                              <div class="offer-image">
                                 <a href="#">
                                 <img src="{{asset ('gauto/assets/img/toyota-offer-2.png')}}" alt="offer 1" />
                                 </a>
                              </div>
                              <div class="offer-text">
                                 <a href="#">
                                    <h3>Toyota Camry</h3>
                                 </a>
                                 <h4>Rp250.000<span>/ Hari</span></h4>
                                 <ul>
                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                 </ul>
                                 <div class="offer-action">
                                    <a href="#" class="offer-btn-1">PESAN</a>
                                    <a href="#" class="offer-btn-2">DETAIL</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- All Tab End -->
                     
                  <!-- Nissan Tab Start -->
                  <div class="tab-pane fade" id="nissan" role="tabpanel" aria-labelledby="nissan-tab">
                     <div class="row">
                        <div class="col-lg-4">
                           <div class="single-offers">
                              <div class="offer-image">
                                 <a href="#">
                                 <img src="{{asset ('gauto/assets/img/bmw-offer.png')}}" alt="offer 1" />
                                 </a>
                              </div>
                              <div class="offer-text">
                                 <a href="#">
                                    <h3>BMW X3</h3>
                                 </a>
                                 <h4>Rp250.000<span>/ Hari</span></h4>
                                 <ul>
                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                 </ul>
                                 <div class="offer-action">
                                    <a href="#" class="offer-btn-1">PESAN</a>
                                    <a href="#" class="offer-btn-2">DETAIL</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="single-offers">
                              <div class="offer-image">
                                 <a href="#">
                                 <img src="{{asset ('gauto/assets/img/audi-offer.png')}}" alt="offer 1" />
                                 </a>
                              </div>
                              <div class="offer-text">
                                 <a href="#">
                                    <h3>Audi Q3</h3>
                                 </a>
                                 <h4>Rp250.000<span>/ Hari</span></h4>
                                 <ul>
                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                 </ul>
                                 <div class="offer-action">
                                    <a href="#" class="offer-btn-1">PESAN</a>
                                    <a href="#" class="offer-btn-2">DETAIL</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="single-offers">
                              <div class="offer-image">
                                 <a href="#">
                                 <img src="{{asset ('gauto/assets/img/toyota-offer-2.png')}}" alt="offer 1" />
                                 </a>
                              </div>
                              <div class="offer-text">
                                 <a href="#">
                                    <h3>Toyota Camry</h3>
                                 </a>
                                 <h4>Rp250.000<span>/ Hari</span></h4>
                                 <ul>
                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                 </ul>
                                 <div class="offer-action">
                                    <a href="#" class="offer-btn-1">PESAN</a>
                                    <a href="#" class="offer-btn-2">DETAIL</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Nissan Tab End -->
                     
                  <!-- Toyota Tab Start -->
                  <div class="tab-pane fade" id="Toyota" role="tabpanel" aria-labelledby="Toyota-tab">
                     <div class="row">
                        <div class="col-lg-4">
                           <div class="single-offers">
                              <div class="offer-image">
                                 <a href="#">
                                 <img src="{{asset ('gauto/assets/img/nissan-offer.png')}}" alt="offer 1" />
                                 </a>
                              </div>
                              <div class="offer-text">
                                 <a href="#">
                                    <h3>Nissan 370Z</h3>
                                 </a>
                                 <h4>Rp250.000<span>/ Hari</span></h4>
                                 <ul>
                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                 </ul>
                                 <div class="offer-action">
                                    <a href="#" class="offer-btn-1">PESAN</a>
                                    <a href="#" class="offer-btn-2">DETAIL</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="single-offers">
                              <div class="offer-image">
                                 <a href="#">
                                 <img src="{{asset ('gauto/assets/img/offer-toyota.png')}}" alt="offer 1" />
                                 </a>
                              </div>
                              <div class="offer-text">
                                 <a href="#">
                                    <h3>Toyota Alphard</h3>
                                 </a>
                                 <h4>Rp250.000<span>/ Hari</span></h4>
                                 <ul>
                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                 </ul>
                                 <div class="offer-action">
                                    <a href="#" class="offer-btn-1">PESAN</a>
                                    <a href="#" class="offer-btn-2">DETAIL</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="single-offers">
                              <div class="offer-image">
                                 <a href="#">
                                 <img src="{{asset ('gauto/assets/img/audi-offer.png')}}" alt="offer 1" />
                                 </a>
                              </div>
                              <div class="offer-text">
                                 <a href="#">
                                    <h3>Audi Q3</h3>
                                 </a>
                                 <h4>Rp250.000<span>/ Hari</span></h4>
                                 <ul>
                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                 </ul>
                                 <div class="offer-action">
                                    <a href="#" class="offer-btn-1">PESAN</a>
                                    <a href="#" class="offer-btn-2">DETAIL</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Toyota Tab Start -->
                     
                  <!-- Audi Tab Start -->
                  <div class="tab-pane fade" id="Audi" role="tabpanel" aria-labelledby="Audi-tab">
                     <div class="row">
                        <div class="col-lg-4">
                           <div class="single-offers">
                              <div class="offer-image">
                                 <a href="#">
                                 <img src="{{asset ('gauto/assets/img/audi-offer.png')}}" alt="offer 1" />
                                 </a>
                              </div>
                              <div class="offer-text">
                                 <a href="#">
                                    <h3>Audi Q3</h3>
                                 </a>
                                 <h4>Rp250.000<span>/ Hari</span></h4>
                                 <ul>
                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                 </ul>
                                 <div class="offer-action">
                                    <a href="#" class="offer-btn-1">PESAN</a>
                                    <a href="#" class="offer-btn-2">DETAIL</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="single-offers">
                              <div class="offer-image">
                                 <a href="#">
                                 <img src="{{asset ('gauto/assets/img/nissan-offer.png')}}" alt="offer 1" />
                                 </a>
                              </div>
                              <div class="offer-text">
                                 <a href="#">
                                    <h3>Nissan 370Z</h3>
                                 </a>
                                 <h4>Rp250.000<span>/ Hari</span></h4>
                                 <ul>
                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                 </ul>
                                 <div class="offer-action">
                                    <a href="#" class="offer-btn-1">PESAN</a>
                                    <a href="#" class="offer-btn-2">DETAIL</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="single-offers">
                              <div class="offer-image">
                                 <a href="#">
                                 <img src="{{asset ('gauto/assets/img/toyota-offer-2.png')}}" alt="offer 1" />
                                 </a>
                              </div>
                              <div class="offer-text">
                                 <a href="#">
                                    <h3>Toyota Alphard</h3>
                                 </a>
                                 <h4>Rp250.000<span>/ Hari</span></h4>
                                 <ul>
                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                 </ul>
                                 <div class="offer-action">
                                    <a href="#" class="offer-btn-1">PESAN</a>
                                    <a href="#" class="offer-btn-2">DETAIL</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Audi Tab End -->
                     
                  <!-- Marcedes Tab Start -->
                  <div class="tab-pane fade" id="mercedes" role="tabpanel" aria-labelledby="mercedes-tab">
                     <div class="row">
                        <div class="col-lg-4">
                           <div class="single-offers">
                              <div class="offer-image">
                                 <a href="#">
                                 <img src="{{asset ('gauto/assets/img/marcedes-offer.png')}}" alt="offer 1" />
                                 </a>
                              </div>
                              <div class="offer-text">
                                 <a href="#">
                                    <h3>marcedes S-class</h3>
                                 </a>
                                 <h4>Rp250.000<span>/ Hari</span></h4>
                                 <ul>
                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                 </ul>
                                 <div class="offer-action">
                                    <a href="#" class="offer-btn-1">PESAN</a>
                                    <a href="#" class="offer-btn-2">DETAIL</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="single-offers">
                              <div class="offer-image">
                                 <a href="#">
                                 <img src="{{asset ('gauto/assets/img/audi-offer.png')}}" alt="offer 1" />
                                 </a>
                              </div>
                              <div class="offer-text">
                                 <a href="#">
                                    <h3>Audi Q3</h3>
                                 </a>
                                 <h4>Rp250.000<span>/ Hari</span></h4>
                                 <ul>
                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                 </ul>
                                 <div class="offer-action">
                                    <a href="#" class="offer-btn-1">PESAN</a>
                                    <a href="#" class="offer-btn-2">DETAIL</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="single-offers">
                              <div class="offer-image">
                                 <a href="#">
                                 <img src="{{asset ('gauto/assets/img/nissan-offer.png')}}" alt="offer 1" />
                                 </a>
                              </div>
                              <div class="offer-text">
                                 <a href="#">
                                    <h3>Nissan 370Z</h3>
                                 </a>
                                 <h4>Rp250.000<span>/ Hari</span></h4>
                                 <ul>
                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                 </ul>
                                 <div class="offer-action">
                                    <a href="#" class="offer-btn-1">PESAN</a>
                                    <a href="#" class="offer-btn-2">DETAIL</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Marcedes Tab End -->
                     
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
                     <p>"Dorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat adipisicing elit."</p>
                     <div class="testimonial-meta">
                        <div class="client-image">
                           <img src="{{asset ('gauto/assets/img/testimonial.jpg')}}" alt="testimonial" />
                        </div>
                        <div class="client-info">
                           <h3>Daeng Lolo</h3>
                           <p>Jakarta</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="single-testimonial">
                  <div class="testimonial-text">
                     <p>"Forem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat adipisicing elit."</p>
                     <div class="testimonial-meta">
                        <div class="client-image">
                           <img src="{{asset ('gauto/assets/img/testimonial-2.jpg')}}" alt="testimonial" />
                        </div>
                        <div class="client-info">
                           <h3>Haji Udin</h3>
                           <p>Medan</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="single-testimonial">
                  <div class="testimonial-text">
                     <p>"Dorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat adipisicing elit."</p>
                     <div class="testimonial-meta">
                        <div class="client-image">
                           <img src="{{asset ('gauto/assets/img/testimonial.jpg')}}" alt="testimonial" />
                        </div>
                        <div class="client-info">
                           <h3>Daeng Lolo</h3>
                           <p>Makassar</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="single-testimonial">
                  <div class="testimonial-text">
                     <p>"Dorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat adipisicing elit."</p>
                     <div class="testimonial-meta">
                        <div class="client-image">
                           <img src="{{asset ('gauto/assets/img/testimonial.jpg')}}" alt="testimonial" />
                        </div>
                        <div class="client-info">
                           <h3>Daeng Lolo</h3>
                           <p>Bali</p>
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
                        <h4><a href="#">+62 123 456 789</a></h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Call Area End -->   
   
<!-- Blog Area Start -->
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
<!-- Blog Area End -->
       
       
@endsection
