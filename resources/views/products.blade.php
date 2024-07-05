@extends("layouts.base-layout")

<?php
function switchFavourites($isInFavorites)
{
    if ($isInFavorites) {
        return false;
    } else {
        return true;
    }
}
?>

@section("main")
    <div class="container my-4">
        <div class="row g-4">
            @foreach ($products as $product)
                @include("shared.product-card")
            @endforeach
        </div>
    </div>
@endsection

@section("scripts")
    <script>
        function switchFavourites(element) {
            // Toggle the class between 'fav' and 'notFav'
            if (element.classList.contains('fav')) {
                element.classList.remove('fav');
                element.classList.add('notFav');
            } else {
                element.classList.remove('notFav');
                element.classList.add('fav');
            }
        }
    </script>
@endsection
