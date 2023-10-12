<div class="onhover-dropdown header-badge pe-0">
    <button type="button" class="btn p-0 position-relative header-wishlist">
        <div wire:ignore>
            <i data-feather="shopping-cart"></i>
        </div>

        @unless ($this->cartIsEmpty)
            <span class="position-absolute top-0 start-100 translate-middle badge">{{ $this->cartQuantitiesSum }}
                <span class="visually-hidden">Artículos del carrito</span>
            </span>
        @endunless
    </button>

    <div class="onhover-div pe-0">
        <div class="pe-3" style="max-height: 300px;overflow-y: auto;">
            <ul class="cart-list">
                @forelse ($this->cartItems as $hash => $item)
                    <li class="product-box-contain">
                        <div class="drop-cart">
                            <a href="{{ route('product.show', $item->extra_info['slug'] ?? '') }}"
                                title="{{ $item->title }}" class="drop-image">
                                <img src="{{ $item->extra_info['thumb'] ?? '' }}" class="blur-up lazyload" alt="">
                            </a>
    
                            <div class="drop-contain">
                                <a href="{{ route('product.show', $item->extra_info['slug'] ?? '') }}">
                                    <h5>{{ $item->title }}</h5>
                                </a>
                                <h6><span>{{ $item->quantity }} x</span>
                                    ${{ shopper_money_format($item->get('total_price') * 100) }}</h6>
    
                                <button wire:click="removeItemToCart('{{ $hash }}')" wire:loading.attr="disabled"
                                    class="close-button close_button">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                        </div>
                    </li>
                @empty
                    <p>No tienes productos en el carrito.</p>
                @endforelse
            </ul>
        </div>

        <div class="price-box pe-3">
            <h5>Total:</h5>
            <h4 class="theme-color fw-bold">${{ shopper_money_format($this->cartItemsSubtotal * 100) }}</h4>
        </div>

        <div class="button-group pe-3">
            @unless ($this->cartIsEmpty)
                <a href="cart.html" class="btn btn-sm cart-button">Ver carrito</a>
                <a href="checkout.html" class="btn btn-sm cart-button theme-bg-color text-white">
                    Realizar pedido
                </a>
            @endunless
        </div>
    </div>
</div>
