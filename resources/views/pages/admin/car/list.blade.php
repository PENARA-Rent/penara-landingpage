@extends('layouts.admin.main')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Car</a></li>
            <li class="breadcrumb-item active">List</li>
        </ol>
    </div>                    
</div>
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        @if ($errors->any())        
            @foreach ($errors->all() as $error)                
                <div class="alert alert-danger"></i> 
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            @endforeach
        @endif
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Car</h4>   
                <h6 class="card-subtitle">List</h6>             
                <div class="table-responsive m-t-40">
                    <table id="carTable" class="table table-bordered table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>                                
                                <th>Brand</th>
                                <th>Name</th>                                
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        
                        
                        <tbody>
                            @foreach ($cars as $car)    
                            
                            <tr>                                
                                <td>{{$car->brand->name}}</td>
                                <td>{{$car->name}}</td>                                                        
                                <td>                                                                        
                                    <a href="{{ route('admin.car.detail',$car->id) }}" data-toggle="tooltip" data-original-title="Detail"> <i class="fa fa-eye text-inverse m-r-10"></i> </a>                                    
                                </td>                              
                            </tr>                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<!-- This is data table -->
<script src="{{asset ('material/plugins/datatables/jquery.dataTables.min.js')}}"></script>

<script>
$(document).ready(function() {
    $('#carTable').DataTable();
    
});

</script>


@endsection
