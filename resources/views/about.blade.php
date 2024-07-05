@extends("layouts.base-layout")

@section("main")
    <div class="container my-4">
        <div class="our-story my-4">
            <h1 class="display-3 fw-bold text-center">Our Story</h1>
            <div class="d-flex justify-content-center py-4">
                <img
                    class="img-fluid"
                    src="{{ Vite::asset("resources/img/about-img.jpg") }}"
                    alt="about-img"
                />
            </div>
            <p class="fs-5">
                Founded in 1989, Our Store started as a small boutique with a
                big dream: to make fashion accessible to everyone. Over the
                years, we have grown into a beloved brand known for our
                commitment to quality, sustainability, and customer
                satisfaction.
            </p>
        </div>

        <div class="our-values my-4 py-4 text-center">
            <h2 class="display-5 fw-bold">Our Values</h2>
            <ul class="fs-5">
                <li class="py-3">
                    <strong>Quality:</strong>
                    We ensure that all our products are made with the highest
                    standards of craftsmanship.
                </li>
                <li class="py-3">
                    <strong>Sustainability:</strong>
                    We are dedicated to eco-friendly practices and use
                    sustainable materials wherever possible.
                </li>
                <li class="py-3">
                    <strong>Customer Service:</strong>
                    Our customers are our top priority. We strive to provide
                    exceptional service and support.
                </li>
                <li class="py-3">
                    <strong>Innovation:</strong>
                    We constantly innovate to bring you the latest in fashion
                    trends and technologies.
                </li>
            </ul>
        </div>

        <div class="contact-us my-4 text-center">
            <h2 class="display-5 fw-bold">Contact Us</h2>
            <p class="fs-5">
                If you have any questions or need further assistance, please
                feel free to reach out to us. We are here to help you!
            </p>
            <p class="fs-5">Email: support@ourstore.com</p>
            <p class="fs-5">Phone: (123) 456-7890</p>
        </div>
    </div>
@endsection
