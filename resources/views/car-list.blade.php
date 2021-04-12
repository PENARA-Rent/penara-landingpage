@extends('layouts.main')

@section('content')

<!-- Breadcromb Area Start -->
<section class="gauto-breadcromb-area section_70">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="breadcromb-box">
                <h3>Car Listing</h3>
                <ul>
                   <li><i class="fa fa-home"></i></li>
                   <li><a href="index.html">Home</a></li>
                   <li><i class="fa fa-angle-right"></i></li>
                   <li>Car Listing</li>
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
                        <li class="active">
                            <a href="#">All Brands<span>(2376)</span></a>
                        </li>
                        <li>
                            <a href="#">Toyota<span>(237)</span></a>
                        </li>
                        
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
                                            <a href="#" class="offer-btn-1">Rent Car</a>
                                            <a href="#" class="offer-btn-2">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                                                
                        @endforeach
                    </div>
                    
                </div>
                <div class="pagination-box-row">
                    <p>Page 1 of 6</p>
                    <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li>...</li>
                        <li><a href="#">6</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Car Listing Area End -->

@endsection