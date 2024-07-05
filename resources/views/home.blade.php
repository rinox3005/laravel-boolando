@extends("layouts.base-layout")

@section("main")
    <div class="container my-4">
        <h1 class="display-1 fw-semibold text-center">
            Welcome to Boolando Store
        </h1>
        <div class="home-images d-flex justify-content-center py-2">
            <img
                class="home-img pe-3"
                src="{{ Vite::asset("resources/img/1.webp") }}"
                alt="img1"
            />
            <img
                class="home-img pe-3"
                src="{{ Vite::asset("resources/img/2.webp") }}"
                alt="img2"
            />
            <img
                class="home-img"
                src="{{ Vite::asset("resources/img/4.webp") }}"
                alt="img3"
            />
        </div>
        <p class="fs-5 fw-semibold py-3 text-center">
            Discover the latest trends in fashion and enjoy our exclusive
            discounts. Browse through our wide range of
            <a class="text-danger fw-bold" href="{{ route("products") }}">
                products
            </a>
            and find the perfect items that suit your style.
        </p>
    </div>
@endsection
