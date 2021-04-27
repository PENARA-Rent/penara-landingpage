<nav class="sidebar-nav">
    <ul id="sidebarnav">
        <li class="nav-small-cap">Admin</li>
        <li>
            <a href="{{ route('admin.index') }}" aria-expanded="false"><i class="fa fa-circle"></i><span class="hide-menu">Dashboard</span></a>
        </li>        
        <li>
            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-car"></i><span class="hide-menu">Car</span></a>
            <ul aria-expanded="false" class="collapse">                
                <li><a href="{{ route('admin.car.list') }}">List</a></li>
                <li><a href="{{ route('admin.car.add') }}">Add</a></li>
                
            </ul>
        </li> 
        
    </ul>
</nav>