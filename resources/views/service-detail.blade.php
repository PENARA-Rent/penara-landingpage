@extends('layouts.main')

@section('content')

<!-- Breadcromb Area Start -->
<section class="gauto-breadcromb-area section_70">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="breadcromb-box">
                <h3>Service</h3>
                <ul>
                   <li><i class="fa fa-home"></i></li>
                   <li><a href="index.html">Home</a></li>
                   <li><i class="fa fa-angle-right"></i></li>
                   <li>Service</li>
                </ul>
             </div>
          </div>
       </div>
    </div>
</section>
<!-- Breadcromb Area End -->
  
  
<!-- Service Details Page Start -->
<section class="gauto-service-details-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="service-details-left">
                <div class="sidebar-widget">
                    <ul class="service-menu">
                        @foreach ($services as $service)
                            <li><a href="{{ route('service.detail', $service->id) }}">{{ $service->title }}</a></li>    
                        @endforeach                                                
                        
                    </ul>
                </div>
                <div class="sidebar-widget">
                    <div class="brochures">
                        <a href="#"><i class="fa fa-file-pdf-o"></i>download.pdf</a>
                        <a href="#"><i class="fa fa-file-word-o"></i>download.doc</a>
                    </div>
                </div>
                <div class="sidebar-widget">
                    <div class="service-page-banner">
                        <h3>40% off only for new members</h3>
                        <p>Fusce vulputate eleifend sapien. Vestibulum purus quam, risque</p>
                        <a href="#" class="gauto-btn">Reserve Now!</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-right">
                <h3>{{ $selectedService->title }}</h3>
                <p>{{ $selectedService->description }}</p>                
                <div class="row">
                    <div class="col-md-6 pad-right-sm">
                        <div class="service-details-image">
                            <img src="{{asset ($selectedService->image_path)}}" />
                        </div>
                    </div>
                    
                </div>
                <div class="service-details-list clearfix">
                        <ul>    
                            @foreach ($selectedService->service_points as $service_point)
                                @if ($loop->index < count($selectedService->service_points) / 2)                                
                                    <li><i class="fa fa-check"></i>{{ $service_point->value }}</li>                                    
                                @endif    
                            @endforeach
                        </ul>
                        <ul>    
                            @foreach ($selectedService->service_points as $service_point)
                                @if ($loop->index >= count($selectedService->service_points) / 2)                                
                                    <li><i class="fa fa-check"></i>{{ $service_point->value }}</li>                                    
                                @endif    
                            @endforeach
                        </ul>
                        
                </div>
                <div class="service-accordion" id="accordion">
                    <h3>Get more information</h3>
                    @foreach ($selectedService->service_faqs as $service_faq)                        
                        <div class="single_faq_accordian">
                            <div class="faq_accordian_header">
                                <a class="btn btn-link collapsed" href="#" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                {{ $service_faq->question }}
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="faq_accordian_body">
                                <p>{{ $service_faq->answer }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Details Page End -->

@endsection