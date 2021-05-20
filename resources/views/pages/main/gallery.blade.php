@extends('layouts.main')

@section('content')

<!-- Breadcromb Area Start -->
<section class="gauto-breadcromb-area section_70">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="breadcromb-box">
                <h3>Galeri</h3>
                <ul>
                   <li><i class="fa fa-home"></i></li>
                   <li><a>Beranda</a></li>
                   <li><i class="fa fa-angle-right"></i></li>
                   <li>Galeri</li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Breadcromb Area End -->
  
  
 <!-- Gallery Area Start -->
 <section class="gauto-gallery-area section_70">
    <div class="container">
        <div class="row" id="lightgallery">
            @foreach ($photos as $photo)
            
            <div class="col-lg-4" data-src="{{asset ($photo->path)}}">
                <div class="single-gallery">
                    <div class="img-holder">
                        <img src="{{asset ($photo->path)}}" alt="{{ $photo->title }}"/>                                        
                        <div class="overlay-content">
                            <div class="inner-content">
                                <div class="title-box">
                                    <h3><a href="#">{{ $photo->title }}</a></h3>
                                </div>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>                                 
            @endforeach
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="load-more">                                                            
                    {{-- Next Page Link --}}
                    @if($photos->hasPages())
                        @if ($photos->hasMorePages())
                            <a href="{{ $photos->nextPageUrl() }}" class="gauto-btn">More Pictures</a>                
                        @else
                            <a href="{{ $photos->url(1) }}" class="gauto-btn">More Pictures</a>
                        @endif                    
                    @endif                  
                </div>
            </div>
        </div>
    </div>
 </section>
 <!-- Gallery Area End -->

@endsection