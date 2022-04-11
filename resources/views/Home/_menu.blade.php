<div class="nav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="{{ asset('assests')}}/index.html" class="nav-item nav-link active">Home</a>
                    <a href="{{ asset('assests')}}/product-list.html" class="nav-item nav-link">Products</a>
                    <a href="{{ asset('assests')}}/product-detail.html" class="nav-item nav-link">Product Detail</a>
                    <a href="{{ asset('assests')}}/cart.html" class="nav-item nav-link">Cart</a>
                    <a href="{{ asset('assests')}}/checkout.html" class="nav-item nav-link">Checkout</a>
                    <a href="{{ asset('assests')}}/my-account.html" class="nav-item nav-link">My Account</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
                        <div class="dropdown-menu">
                            <a href="{{ asset('assests')}}/wishlist.html" class="dropdown-item">Wishlist</a>
                            <a href="{{ asset('assests')}}/login.html" class="dropdown-item">Login & Register</a>
                            <a href="{{ asset('assests')}}/contact.html" class="dropdown-item">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="navbar-nav ml-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Login</a>
                            <a href="#" class="dropdown-item">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>