<!-- FontAwesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
            <h1 class="h5">Sunchhung</h1>
            <p>Web Designer</p>
        </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
        <li class="active"><a href=""> <i class="icon-home"></i>Home </a></li>
        <li><a href="{{url('category_page')}}"> <i class="icon-grid"></i>Category </a></li>

        <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Books</a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="{{url('add_book')}}">Add Books</a></li>
                <li><a href="{{url('show_book')}}">Show Books</a></li>

            </ul>
        </li>
        <li><a href="{{url('borrow_request')}}"> <i class="icon-logout"></i>Borrow Request</a></li>

</nav>
