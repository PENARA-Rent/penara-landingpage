@extends('layouts.main')

@section('content')

<!-- Service Area Start -->
<section class="gauto-service-area service-page-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="site-heading">
                    <h4>See our</h4>
                    <h2>Latest Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $service)                
                <div class="col-md-4">
                    <div class="single-service">
                        <span class="service-number"> {{ sprintf('%02d', $loop->index + 1) }} </span>
                        <div class="service-icon">
                        <img src="{{asset ($service->icon_path)}}" />
                        </div>
                        <div class="service-text">
                        <a href="{{ route('service.detail',$service->id) }}">
                            <h3>{{ $service->title }}</h3>
                        </a>
                        <p>{{ $service->description }}</p>
                        </div>
                    </div>
                </div>   
            @endforeach                   
        </div>
    </div>
</section>
<!-- Service Area End -->

@endsection