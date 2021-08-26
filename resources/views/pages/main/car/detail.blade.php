@extends('layouts.main')

@section('content')
<!-- Breadcromb Area Start -->
<section class="gauto-breadcromb-area section_70">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="breadcromb-box">
                <h3>Car Booking</h3>
                <ul>
                   <li><i class="fa fa-home"></i></li>
                   <li><a>Home</a></li>
                   <li><i class="fa fa-angle-right"></i></li>
                   <li>Car Booking</li>
                </ul>
             </div>
          </div>
       </div>
    </div>
</section>
<!-- Breadcromb Area End -->
  
  
<!-- Car Booking Area Start -->
<section class="gauto-car-booking section_70">
    <div class="container">
       <div class="row">
          <div class="col-lg-6">
             <div class="car-booking-image">
                <img src="{{asset ($car->car_images[0]->path) }}" />  
             </div>
          </div>
          <div class="col-lg-6">
             <div class="car-booking-right">                
                
                
                <h3>{{ $car->brand->name }} {{ $car->name }}</h3>
                <div class="price-rating">
                   <div class="price-rent">
                    <h4>Rp{{ number_format($car->price) }}<span>/ Hari</span></h4>
                   </div>
                   <div class="car-rating">
                      <ul>
                         <li><i class="fa fa-star"></i></li>
                         <li><i class="fa fa-star"></i></li>
                         <li><i class="fa fa-star"></i></li>
                         <li><i class="fa fa-star"></i></li>
                         <li><i class="fa fa-star-half-o"></i></li>
                      </ul>
                      {{-- <p>(123 rating)</p> --}}
                   </div>
                </div>
                <p>{{$car->description}}</p>
                <div class="car-features clearfix">
                    <ul>    
                        @foreach ($car->car_features as $car_feature)
                            @if ($loop->index < count($car->car_features) / 2)                                
                                <li><i class="{{ $car_feature->icon_class }}"></i> {{ $car_feature->title }}</li>
                            @endif    
                        @endforeach
                    </ul>
                    <ul>    
                        @foreach ($car->car_features as $car_features)
                            @if ($loop->index >= count($car->car_features) / 2)                                
                                <li><i class="{{ $car_feature->icon_class }}"></i> {{ $car_feature->title }}</li>
                            @endif    
                        @endforeach
                    </ul>                   
                </div>
                <a href="https://wa.link/olxb9z" class="rental-tag" target="_blank">Booking</a>
             </div>
          </div>
       </div>
       <div class="row">
         <div class="col-md-12">
            <div class="load-more">
               <a href="{{ route('car.list') }}" class="gauto-btn">Tampilkan Mobil Lain</a>   
            </div>
         </div>
      </div>  
    </div>
</section>
<!-- Car Booking Area End -->

@endsection