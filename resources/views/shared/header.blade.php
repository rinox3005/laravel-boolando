{{--
    <header>
    <div
    class="d-flex justify-content-between align-items-center container py-3"
    >
    <ul class="d-flex mb-0">
    <li>Home</li>
    <li>Products</li>
    <li>About Us</li>
    </ul>
    <h2 class="mb-0">Logo</h2>
    <ul class="d-flex mb-0">
    <li>icona1</li>
    <li>icona2</li>
    <li>icona3</li>
    </ul>
    </div>
    </header>
--}}

<header>
    <div class="row container m-auto py-3">
        <nav class="col-4">
            <ul class="d-flex mb-0">
                <li><a href="">Home</a></li>
                <li><a href="">Products</a></li>
                <li><a href="">About Us</a></li>
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
                        alt="logo"
                    />
                </li>
                <li>
                    <img
                        src="{{ Vite::asset("resources/img/heart.webp") }}"
                        alt="logo"
                    />
                </li>
                <li>
                    <img
                        src="{{ Vite::asset("resources/img/shopping-bag.webp") }}"
                        alt="logo"
                    />
                </li>
            </ul>
        </div>
    </div>
</header>
