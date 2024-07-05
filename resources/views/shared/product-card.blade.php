<div class="col-4">
    <div class="content">
        <img
            class="main-img"
            src="{{ Vite::asset("resources/img/" . $product["frontImage"]) }}"
            alt="{{ $product["frontImage"] }}"
        />
        <img
            class="hover-img"
            src="{{ Vite::asset("resources/img/" . $product["backImage"]) }}"
            alt="{{ $product["backImage"] }}"
        />
        <div
            class="heart {{ $product["isInFavorites"] ? "fav" : "notFav" }}"
            onclick="switchFavourites(this)"
        >
            &hearts;
        </div>

        <div class="label">
            @foreach ($product["badges"] as $badge)
                @if ($badge["type"] === "discount")
                    <span class="discount fw-bold">
                        {{ $badge["value"] }}
                    </span>
                @elseif ($badge["type"] === "tag")
                    <span class="sustainability fw-bold">
                        {{ $badge["value"] }}
                    </span>
                @endif
            @endforeach
        </div>
    </div>
    <div class="brand">{{ $product["brand"] }}</div>
    <div class="product fw-bold text-uppercase">
        {{ $product["name"] }}
    </div>
    <div class="price">
        <span class="red-text fw-bold">
            {{ $product["price"] }}
        </span>
        @if (isset($product["discount"]))
            <span class="line-through">
                {{ $product["discount"] }}
            </span>
        @endif
    </div>
</div>
