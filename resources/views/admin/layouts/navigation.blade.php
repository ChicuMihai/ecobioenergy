<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">Admin</strong><b class="caret"></b>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li>
                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Carousel </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" aria-expanded="false" style="height:0px;">
                    <li>
                    <a href="{{url('/carousel')}}">Vizualizare</a></li>
                        <li>
                        <a href="{{route('carousel.create')}}">Adaugare un slide nou</a></li>
                    
                        
                </ul>
            </li>
            <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Produse</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse" aria-expanded="false" style="height:0px;">
                        <li><a href="{{route('product.index')}}">Vizualizare</a></li>
                        <li><a href="{{route('product.create')}}">Adaugare Produs Nou</a></li>
                        
                            
                    </ul>
            </li>

            <li>
                <a href="{{ route('about.create') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Despre Noi</span></a>
            </li>
            <li>
                    <a href="{{ route('contact_edit') }}"><i class="fa fa-address-card-o"></i> <span class="nav-label">Informatii de contact</span></a>
                </li>
            
        </ul>

    </div>
</nav>
