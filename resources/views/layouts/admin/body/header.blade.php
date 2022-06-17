{{-- <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="#" class="list-group-item list-group-item-action py-2 ripple active" aria-current="true">
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>dashboard</span>
                </a>

                <a href="{{ route('add.product') }}" class="list-group-item list-group-item-action py-2 ripple ">
                    <i class="fas fa-product-hunt fa-fw me-3"></i><span>Add Products</span>
                </a>

                <a href="./manageProduct.html" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fas fa-edit fa-fw me-3"></i><span>Prducts</span></a>

                <a href="{{ route('all.brands') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fa fa-pie-chart fa-fw me-3"></i><span>brands</span></a>

                <a href="{{ route('all.categories') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fa fa-pie-chart fa-fw me-3"></i><span>categories</span></a>

                <a href="{{ route('all.sub-categories') }}"
                    class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fa fa-pie-chart fa-fw me-3"></i><span>Sub Categories</span></a>
            </div>
        </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <img src="{{ asset('frontend/images/maas.png') }}" height="30" alt="" loading="lazy" />
            </a>
            <!-- Search form -->
            <form class="d-none d-md-flex input-group w-auto my-auto">
                <input autocomplete="off" type="search" class="form-control rounded" placeholder='Search...'
                    style="min-width: 225px" />
                <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
            </form>

            <!-- Right links -->
            <ul class="navbar-nav ms-auto d-flex flex-row">
                <!-- Notification dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                        role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bell"></i>
                        <span class="badge rounded-pill badge-notification bg-danger">1</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Some news</a></li>
                        <li><a class="dropdown-item" href="#">Another news</a></li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header> --}}



<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="#" class="list-group-item list-group-item-action py-2 ripple active" aria-current="true">
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>dashboard</span>
                </a>

                <a href="{{ route('add.product') }}" class="list-group-item list-group-item-action py-2 ripple ">
                    <i class="fas fa-product-hunt fa-fw me-3"></i><span>Add Products</span>
                </a>

                <a href="./manageProduct.html" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fas fa-edit fa-fw me-3"></i><span>Prducts</span></a>

                <a href="{{ route('all.brands') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fa fa-pie-chart fa-fw me-3"></i><span>brands</span></a>

                <a href="{{ route('all.categories') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fa fa-pie-chart fa-fw me-3"></i><span>categories</span></a>

                <a href="{{ route('all.sub-categories') }}"
                    class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fa fa-pie-chart fa-fw me-3"></i><span>Sub Categories</span></a>
            </div>
        </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <img src="{{ asset('upload/MASS.png') }}" height="30" alt="" loading="lazy" />
            </a>
            <!-- Search form -->
            <form class="d-none d-md-flex input-group w-auto my-auto">
                <input autocomplete="off" type="search" class="form-control rounded" placeholder='Search...'
                    style="min-width: 225px" />
                <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
            </form>

            <!-- Right links -->
            <ul class="navbar-nav ms-auto d-flex flex-row">


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink"
                        role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle"
                            height="22" alt="Avatar" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="{{ route('admin.profile') }}">Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link d-sm-flex align-items-sm-center" href="#">
                        <strong class="d-none d-sm-block ms-1">Obada Kahlous</strong>
                    </a>
                </li>

                <!-- Avatar -->


                <!-- Notification dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                        role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bell"></i>
                        <span class="badge rounded-pill badge-notification bg-danger">1</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Some news</a></li>
                        <li><a class="dropdown-item" href="#">Another news</a></li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>