@extends('layouts.admin.main')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Brand</a></li>
            <li class="breadcrumb-item active">Form</li>
        </ol>
    </div>                    
</div>
@endsection

@section('content')

<div class="row">

    <div class="col-md-6">
        @if ($errors->any())        
            @foreach ($errors->all() as $error)                
                <div class="alert alert-danger"></i> 
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            @endforeach
        @endif
        @if (\Session::has('success'))
            <div class="alert alert-success"></i> 
                {!! \Session::get('success') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
            </div>            
        @endif
        <div class="card card-body">
            <h3 class="box-title m-b-0">Brand </h3>
            <p class="text-muted m-b-30 font-13"> Form </p>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form action="{{ route('admin.brand.edit') }}" method="POST" >
                        {{ csrf_field() }}
                        <input hidden type="text" name="id" value="{{$brand->id}}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input required type="text" class="form-control" name="name" value="{{ $brand->name }}">
                        </div>
                                              
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Edit</button>
                        <a type="button" href="{{ route('admin.brand.list') }}" class="btn btn-inverse">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection

@section('scripts')
    
<script src="{{asset ('material/plugins/toast-master/js/jquery.toast.js')}}"></script>
<script src="{{asset ('material/js/toastr.js')}}"></script>


@endsection