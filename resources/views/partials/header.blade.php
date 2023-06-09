<header class="d-flex align-items-center bg-white">
    <div class="container_header container-lg d-flex justify-content-between align-items-center py-4 px-3">
        <div class="logo_nav d-flex align-items-center">
            <div class="img_container logoDc">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo-dc">
            </div>

            <nav>

                <div class="nav_option fw-bold d-flex no-underline text-start">
                    <div class=" mx-3">
                        <a class="me-2 fs-5" href="{{ route('home') }}"> Home</a>
                        <a class="fs-5 text-black-50" href="{{ route('admin.comics.index') }}"> admin</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="search_block">
            <input type="search" placeholder="Search" class="no_outline text-end bg-transparent border-0 text-dark">
            <button class="border-0 bg-transparent text-dark"><i class="fa-solid fa-magnifying-glass ms-2"></i></button>
        </div>
    </div>
</header>
