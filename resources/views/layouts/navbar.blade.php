<nav class="container-fluid py-0 shadow-sm">
    <div class="container">
        <div class="navbar navbar-expand-lg">
            <a href="#" class="navbar-brand">
                <img src="{{ asset('images/assets/lms-logo.png') }}" alt="" class="logo">
            </a>
            <ul class="navbar-nav w-100 align-item-center justify-content-center">
                <li class="navbar-item mx-2">
                    <a href="" class="navbar-link btn">Home</a>
                </li>
                <li class="navbar-item mx-2">
                    <a href="" class="navbar-link btn">Cources</a>
                </li>
                <li class="navbar-item mx-2">
                    <a href="" class="navbar-link btn">Blogs & Tricks</a>
                </li>
                <li class="navbar-item mx-2">
                    <a href="" class="navbar-link btn">Projects</a>
                </li>
            </ul>
            <div class="d-flex">
                <a href="#" class="btn border-warning sign-in">Sign in</a>
                <a href="#" class="btn bg-dark mx-2 text-white view">VIEW FREE COURCES</a>
                <button class="btn p-2 d-flex align-items-center justify-content-center search-btn">
                    <img src="{{ asset('images/assets/search.svg') }}" alt="search">
                </button>
            </div>
        </div>
    </div>
</nav>

<div id="search-dialog">
    <div class="mx-auto p-4 bg-white rounded shadow wrap">
        <form action="" class="form-group d-flex">
            <input type="text" class="form-control p-2 px-4" id="search-data" name="search-data" placeholder="Search to learn...">
            <button class="btn">
                <img src="{{ asset('images/assets/search.svg') }}" alt="search">
            </button>
        </form>
    </div>
</div>