<header>
    <div class="d-flex container m-auto py-3">
        <nav class="col-4">
            <ul class="d-flex mb-0">
                <li><a href="{{ route("home") }}">Home</a></li>
                <li><a href="{{ route("products") }}">Products</a></li>
                <li><a href="{{ route("about") }}">About Us</a></li>
            </ul>
        </nav>

        <div class="col-4 justify-content-center d-flex">
            <a href="/">
                <img
                    class="logo"
                    src="{{ Vite::asset("resources/img/boolean-logo.png") }}"
                    alt="logo"
                />
            </a>
        </div>
        <div class="col-4 justify-content-end d-flex">
            <ul class="d-flex mb-0">
                <li>
                    <img
                        src="{{ Vite::asset("resources/img/user.webp") }}"
                        alt="user-icon"
                    />
                </li>
                <li>
                    <img
                        src="{{ Vite::asset("resources/img/heart.webp") }}"
                        alt="favourites-icon"
                    />
                </li>
                <li>
                    <img
                        src="{{ Vite::asset("resources/img/shopping-bag.webp") }}"
                        alt="cart-icon"
                    />
                </li>
            </ul>
        </div>
    </div>
</header>
