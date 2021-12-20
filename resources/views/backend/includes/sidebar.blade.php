<ul class="metismenu" id="menu">
    <li>
        <a class="has-arrow" href="javascript:void();">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Dashboard</div> 
        </a>
        <ul class="">
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> eCommerce v1</a>
            </li>
        </ul>
    </li>

    <li>
        <a class="has-arrow" href="javascript:void();">
            <div class="parent-icon">
                <i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Blank Page</div> 
        </a>
        <ul class="">
            <li>
                <a href="{{ route('blank_index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> index</a>
            </li>
            <li>
                <a href="{{ route('blank_show') }}"><i class="zmdi zmdi-dot-circle-alt"></i> show</a>
            </li>
            <li>
                <a href="{{ route('blank_edit') }}"><i class="zmdi zmdi-dot-circle-alt"></i> edit</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="javascript:void();">
            <div class="parent-icon">
                <i class="fa fa-shopping-cart"></i></div>
            <div class="menu-title">Product Management</div> 
        </a>
        <ul class="">
            <li>
                <a href=""><i class="zmdi zmdi-dot-circle-alt"></i>Add Product</a>
            </li>
            <li>
                <a href=""><i class="zmdi zmdi-dot-circle-alt"></i>Brand</a>
            </li>
            <li>
                <a href=""><i class="zmdi zmdi-dot-circle-alt"></i>Main Category</a>
            </li>
            <li>
                <a href=""><i class="zmdi zmdi-dot-circle-alt"></i>Category</a>
            </li>
            <li>
                <a href=""><i class="zmdi zmdi-dot-circle-alt"></i>Sub  Category</a>
            </li>
            <li>
                <a href=""><i class="zmdi zmdi-dot-circle-alt"></i>Color</a>
            </li>
            <li>
                <a href=""><i class="zmdi zmdi-dot-circle-alt"></i>Size</a>
            </li>
            <li>
                <a href=""><i class="zmdi zmdi-dot-circle-alt"></i>unit</a>
            </li>
            <li>
                <a href=""><i class="zmdi zmdi-dot-circle-alt"></i>Vendor</a>
            </li>
            <li>
                <a href=""><i class="zmdi zmdi-dot-circle-alt"></i>Publication</a>
            </li>
            <li>
                <a href=""><i class="zmdi zmdi-dot-circle-alt"></i>Writer</a>
            </li>
            <li>
                <a href=""><i class="zmdi zmdi-dot-circle-alt"></i>Status</a>
            </li>
        </ul>
    </li>

    
    

<li class="menu-label">Extra</li>
        <li>
            <a href="/", target="_blank">
                <div class="parent-icon">
                    <i class="zmdi zmdi-globe"></i>
                </div>
                <div class="menu-title">Home</div>
            </a>
        </li>


        <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();  confirm('Sure! You want to Logout!!') && document.getElementById('logout-form').submit();">
                <div class="parent-icon">
                    <i class="fa fa-sign-out"></i>
                </div>
                <div class="menu-title">logout</div>
            </a>
        </li>

