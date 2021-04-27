@extends('layouts.admin.main')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Car</a></li>
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
            <h3 class="box-title m-b-0">Car </h3>
            <p class="text-muted m-b-30 font-13"> Form </p>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form action="{{ route('admin.car.store') }}" method="POST" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <div class="form-group">
                            <h4 class="card-title">Car Image</h4>
                            <label for="input-file-now-custom-1">Maximum Size 2MB and File Type Must be .png</label>
                            <input required type="file" name="car_image" class="dropify" data-max-file-size="2M" />
                        </div>
                        <div class="form-group">
                            <label for="example-month-input">Brand</label>
                            <div>
                                <select class="custom-select col-12" name="brand_id">
                                    @foreach ($brands as $brand)          
                                        @if ($loop->index == 0)
                                            <option value="{{$brand->id}}" selected>{{$brand->name}}</option>    
                                        @else
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endif                              
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>                        
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input required type="text" class="form-control" name="name" placeholder="Enter Car Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea required class="form-control" rows="3" name="description" placeholder="Enter Car Description"></textarea>                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Price/Day</label>
                            <input required type="number" class="form-control" name="price" placeholder="250000">
                        </div>                        
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                        <a type="button" href="{{ route('admin.car.list') }}" class="btn btn-inverse">Cancel</a>
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

<!-- jQuery file upload -->
<script src="{{asset ('material/plugins/dropify/dist/js/dropify.min.js')}}"></script>
<script>
$(document).ready(function() {
    // Basic
    $('.dropify').dropify();

    // Translated
    $('.dropify-fr').dropify({
        messages: {
            default: 'Glissez-déposez un fichier ici ou cliquez',
            replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
            remove: 'Supprimer',
            error: 'Désolé, le fichier trop volumineux'
        }
    });

    // Used events
    var drEvent = $('#input-file-events').dropify();

    drEvent.on('dropify.beforeClear', function(event, element) {
        return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
    });

    drEvent.on('dropify.afterClear', function(event, element) {
        alert('File deleted');
    });

    drEvent.on('dropify.errors', function(event, element) {
        console.log('Has Errors');
    });

    var drDestroy = $('#input-file-to-destroy').dropify();
    drDestroy = drDestroy.data('dropify')
    $('#toggleDropify').on('click', function(e) {
        e.preventDefault();
        if (drDestroy.isDropified()) {
            drDestroy.destroy();
        } else {
            drDestroy.init();
        }
    })
});
</script>


@endsection