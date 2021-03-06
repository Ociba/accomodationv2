<div id="off-canvas" class="off-canvas-default dark-div">
    <div class="off-canvas-inner navigation-font">
        <div class="close-canvas-menu"> <i class="fas fa-times"></i> CLOSE </div>
        <nav class="off-menu">
            <ul>
               @if(in_array('Can view dashboard', auth()->user()->Permisions()))
                <li id="nav-menu-item-1589" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                    <a href="/dashboard" class="menu-link dropdown-toggle disabled main-menu-link" ><i class="fa fa-home"></i> Dashboard </a>
                </li>
                @endif
                @if(in_array('Can View categories', auth()->user()->Permisions()))
                <li id="nav-menu-item-1589" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                    <a href="/category/" class="menu-link dropdown-toggle disabled main-menu-link"><i class="fa fa-list"></i> Category </a>
                </li>
                @endif
                @if(in_array('Can view Users', auth()->user()->Permisions()))
                <li id="nav-menu-item-1446" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                    <a href="#" class="menu-link dropdown-toggle disabled main-menu-link" data-toggle="dropdown"><i class="fa fa-users"></i> Users </a>
                    <ul class="dropdown-menu menu-depth-1">
                        @if(in_array('Can view Registered Users', auth()->user()->Permisions()))
                        <li id="nav-menu-item-2218" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-post"><a href="/users/" class="menu-link  sub-menu-link">Registered Users</a></li>
                        @endif
                        @if(in_array('Can view Subscribers', auth()->user()->Permisions()))
                        <li id="nav-menu-item-2219" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-post"><a href="/subscribers/" class="menu-link  sub-menu-link">Subscribers </a></li>
                        @endif
                        @if(in_array('Can view Brokers', auth()->user()->Permisions()))
                        <li id="nav-menu-item-2311" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-post"><a href="/brokers/" class="menu-link  sub-menu-link">Brokers </a></li>
                        @endif
                        @if(in_array('Can view Post', auth()->user()->Permisions()))
                        <li id="nav-menu-item-2312" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-post"><a href="/post" class="menu-link  sub-menu-link">Post </a></li>
                        @endif
                        @if(in_array('Can view Account Settings', auth()->user()->Permisions()))
                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/users-types">Account Settings</a></li>
                        @endif
                    </ul>
                </li>
                @endif
                @if(in_array('Can view Property', auth()->user()->Permisions()))
                <li id="nav-menu-item-1446" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                    <a href="#" class="menu-link dropdown-toggle disabled main-menu-link" data-toggle="dropdown"><i class="fa fa-bars"></i> Property </a>
                    <ul class="dropdown-menu menu-depth-1">
                        @if(in_array('Can view my Property', auth()->user()->Permisions()))
                        <li id="nav-menu-item-2218" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-post"><a href="/property/my-property/" class="menu-link  sub-menu-link">My Property</a></li>
                        @endif
                        @if(in_array('Can view property Available', auth()->user()->Permisions()))
                        <li id="nav-menu-item-2219" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-post"><a href="/property/" class="menu-link  sub-menu-link">Property Available </a></li>
                        @endif
                        @if(in_array('Can view  property taken', auth()->user()->Permisions()))
                        <li id="nav-menu-item-2311" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-post"><a href="/property/property-taken" class="menu-link  sub-menu-link">Property Taken </a></li>
                        @endif
                    </ul>
                </li>
                @endif
                @if(in_array('Can view Shop', auth()->user()->Permisions()))
                <li id="nav-menu-item-1446" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                    <a href="#" class="menu-link dropdown-toggle disabled main-menu-link" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i> Shop </a>
                    <ul class="dropdown-menu menu-depth-1">
                        @if(in_array('Can view Item Category', auth()->user()->Permisions()))
                        <li id="nav-menu-item-2218" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-post"><a href="/supermarketitemcategory/" class="menu-link  sub-menu-link">Item Category</a></li>
                        @endif
                        @if(in_array('Can view Supermarket', auth()->user()->Permisions()))
                        <li id="nav-menu-item-2219" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-post"><a href="/supermarket/supermaket-items" class="menu-link  sub-menu-link">Supermarket Items </a></li>
                        @endif
                        @if(in_array('Can view Customer Orders', auth()->user()->Permisions()))
                        <li id="nav-menu-item-2311" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-post"><a href="/supermarket/supermarkets-orders" class="menu-link  sub-menu-link">Customer Orders </a></li>
                        @endif
                    </ul>
                </li>
                @endif
                @if(in_array('Can view Equipment', auth()->user()->Permisions()))
                <li id="nav-menu-item-1446" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                    <a href="#" class="menu-link dropdown-toggle disabled main-menu-link" data-toggle="dropdown"><i class="fa fa-database"></i> Equipment </a>
                    <ul class="dropdown-menu menu-depth-1">
                        @if(in_array('Can view received Requests', auth()->user()->Permisions()))
                        <li id="nav-menu-item-2218" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-post"><a href="/agricultureequipments/equipment-requests-recieved" class="menu-link  sub-menu-link">Received Requests</a></li>
                        @endif
                        @if(in_array('Can view Available Equipment', auth()->user()->Permisions()))
                        <li id="nav-menu-item-2219" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-post"><a href="/agricultureequipments/equipments-available" class="menu-link  sub-menu-link">Equipment Available </a></li>
                        @endif
                        @if(in_array('Can view taken Equipment', auth()->user()->Permisions()))
                        <li id="nav-menu-item-2311" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-post"><a href="/agricultureequipments/equipments-taken" class="menu-link  sub-menu-link">Equipment Taken </a></li>
                        @endif
                    </ul>
                </li>
                @endif
                @if(in_array('Can view produce', auth()->user()->Permisions()))
                <li id="nav-menu-item-1446" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                    <a href="#" class="menu-link dropdown-toggle disabled main-menu-link" data-toggle="dropdown"><i class="fa fa-bars"></i> Produce </a>
                    <ul class="dropdown-menu menu-depth-1">
                        @if(in_array('Can view my Produce', auth()->user()->Permisions()))
                        <li id="nav-menu-item-2218" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-post"><a href="/produce/my-produce" class="menu-link  sub-menu-link">My Produce</a></li>
                        @endif
                        @if(in_array('Can view Available Produce', auth()->user()->Permisions()))
                        <li id="nav-menu-item-2219" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-post"><a href="/produce/produce-available" class="menu-link  sub-menu-link">Produce Available </a></li>
                        @endif
                        @if(in_array('Can view Produce Taken', auth()->user()->Permisions()))
                        <li id="nav-menu-item-2311" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-post"><a href="/produce/produce-taken"" class="menu-link  sub-menu-link">Produce Taken </a></li>
                        @endif
                    </ul>
                </li>
                @endif
                @if(in_array('Can view Pay', auth()->user()->Permisions()))
                <li id="nav-menu-item-1589" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                    <a href="/income/" class="menu-link dropdown-toggle disabled main-menu-link" ><i class="fa fa-dollar-sign"></i> Pay </a>
                </li>
                @endif
            </ul>
        </nav>
    </div>
</div>