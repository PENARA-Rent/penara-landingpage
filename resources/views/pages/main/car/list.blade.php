@extends('layouts.main')

@section('content')

<!-- Breadcromb Area Start -->
<section class="gauto-breadcromb-area section_70">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="breadcromb-box">
                <h3>Pilihan Mobil</h3>
                <ul>
                   <li><i class="fa fa-home"></i></li>
                   <li><a>Beranda</a></li>
                   <li><i class="fa fa-angle-right"></i></li>
                   <li>Pilihan Mobil</li>
                </ul>
             </div>
          </div>
       </div>
    </div>
</section>
<!-- Breadcromb Area End -->
  
  
<!-- Car Listing Area Start -->
<section class="gauto-car-listing section_70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">                
                <div class="sidebar-widget">                    
                    <ul class="service-menu">                        
                        @if ($brandId == 0)                            
                            <li class="active">
                                <a href="{{ route('car.list')}}">Semua Merek<span>({{$allCarCount}})</span></a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('car.list')}}">Semua Merek<span>({{$allCarCount}})</span></a>
                            </li>
                        @endif
                        @foreach ($brands as $brand)               
                            @if ($brandId == $brand->id)                            
                                <li class="active">
                                    <a href="{{ route('car.list', $brand->id )}}">{{$brand->name}}<span>({{ $brand->cars->where('activated', 1)->count() }})</span></a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('car.list', $brand->id )}}">{{$brand->name}}<span>({{ $brand->cars->where('activated', 1)->count() }})</span></a>
                                </li>
                            @endif             
                        
                        @endforeach
                        
                    </ul>
                </div>                
            </div>

            <div class="col-lg-8">
                <div class="car-listing-right">
                    <div class="property-page-heading">
                        <br>
                    </div>
                </div>
                <div class="car-grid-list">
                    <div class="row">
                        @foreach ($cars as $car)                            
                            <div class="col-md-6">
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
                                            <a href="#" class="offer-btn-1"><i>Booking</i></a>
                                            <a href="{{ route('car.detail',$car->id) }}" class="offer-btn-2">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                                                
                        @endforeach
                    </div>
                    
                </div>
                <!-- module pagination begin -->                
                {{ $cars->onEachSide(2)->links('components.paginator') }}                              
                <!-- module pagination end -->
            </div>
        </div>
    </div>
</section>
<!-- Car Listing Area End -->

@endsection