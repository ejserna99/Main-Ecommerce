<div class="onhover-dropdown header-badge">
    <button type="button" class="btn p-0 position-relative header-wishlist">
        <i data-feather="shopping-cart"></i>

        @unless ($this->cartIsEmpty)
            <span class="position-absolute top-0 start-100 translate-middle badge">{{ $this->cartQuantitiesSum }}
                <span class="visually-hidden">Artículos del carrito</span>
            </span>
        @endunless
    </button>

    <div class="onhover-div">
        <ul class="cart-list">
            @forelse ($this->cartItems as $item)
                <li class="product-box-contain">
                    <div class="drop-cart">
                        <a href="product-left-thumbnail.html" class="drop-image">
                            <img src="../assets/images/vegetable/product/1.png" class="blur-up lazyload" alt="">
                        </a>

                        <div class="drop-contain">
                            <a href="product-left-thumbnail.html">
                                <h5>Fantasy Crunchy Choco Chip Cookies</h5>
                            </a>
                            <h6><span>1 x</span> $80.58</h6>
                            <button class="close-button close_button">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </div>
                </li>
            @empty
                <p>No tienes productos en el carrito.</p>
            @endforelse
        </ul>

        <div class="price-box">
            <h5>Total:</h5>
            <h4 class="theme-color fw-bold">${{ $this->cartItemsSubtotal }}</h4>
        </div>

        <div class="button-group">
            @unless ($this->cartIsEmpty)
                <a href="cart.html" class="btn btn-sm cart-button">Ver carrito</a>
                <a href="checkout.html" class="btn btn-sm cart-button theme-bg-color text-white">
                    Realizar pedido
                </a>
            @endunless
        </div>
    </div>
</div>
