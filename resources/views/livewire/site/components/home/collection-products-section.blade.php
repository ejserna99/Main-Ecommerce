<section>
    <div class="container-fluid-lg">
        <div class="title">
            <h2>{{ $this->collection->name }}</h2>
            <span class="title-leaf">
                <svg class="icon-width">
                    <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                </svg>
            </span>
            {!! $this->collection->description !!}
        </div>
        <div class="product-border border-row">
            <div class="slider-6_2 no-arrow">
                @foreach ($this->products as $products)
                    <div>
                        <div class="row m-0">
                            @foreach ($products as $product)
                                <div class="col-12 px-0">
                                    <div class="product-box wow fadeIn" {{ $loop->last ? 'data-wow-delay=0.1s' : '' }}>
                                        <div class="product-image">
                                            <a href="{{ route('product.show', $product->slug) }}">
                                                <img src="{{ $product->getFirstMediaUrl($storageName, 'thumb_200') }}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <ul class="product-option justify-content-around">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a wire:click="$emit('showModal', 'site.components.modals.product-quick-view-modal', '{{ $product->id }}')"
                                                        href="javascript:void(0)">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>

                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                    <a href="compare.html">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </li>

                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                    <a href="wishlist.html" class="notifi-wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="product-detail">
                                            <a href="{{ route('product.show', $product->slug) }}">
                                                <h6 class="name name-2 h-100">{{ $product->name }}</h6>
                                            </a>

                                            <div class="product-rating mt-2 d-none">
                                                <ul class="rating">
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star"></i>
                                                    </li>
                                                </ul>
                                                <span>(34)</span>
                                            </div>

                                            @if ($brand = $product->brand)
                                                <h6 class="sold weight text-content fw-normal">{{ $brand->name }}</h6>
                                            @endif

                                            <div class="counter-box">
                                                @if ($price = $product->getPriceAmount())
                                                    @php
                                                        $item = $this->cartItems->firstWhere('id', $product->id);
                                                    @endphp

                                                    <del class="text-danger d-inline-block" style="min-height: 17px">
                                                        @if ($oldPriceAmount = $product->getOldPriceAmount())
                                                            <small>${{ $oldPriceAmount->formatted }}</small>
                                                        @endif
                                                    </del>

                                                    <h6 class="sold theme-color">
                                                        ${{ $price->formatted }}
                                                    </h6>

                                                    <div class="addtocart_btn">
                                                        <button title="Agregar al carrito"
                                                            data-product-id="{{ $product->id }}"
                                                            class="add-button addcart-button btn buy-button text-light">
                                                            <i class="fa-solid fa-cart-plus"></i>
                                                        </button>
                                                        <div class="qty-box cart_qty">
                                                            <div class="input-group">
                                                                <button type="button" class="btn qty-left-minus"
                                                                    data-type="minus"
                                                                    data-product-id="{{ $product->id }}">
                                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                                </button>
                                                                <input
                                                                    class="form-control input-number qty-input qty-input-{{ $product->id }}"
                                                                    type="text" name="quantity"
                                                                    value="{{ $item->quantity ?? 0 }}" readonly
                                                                    min="0">
                                                                <button type="button" class="btn qty-right-plus"
                                                                    data-type="plus"
                                                                    data-product-id="{{ $product->id }}">
                                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    <a href="#" class="btn bg-success text-light py-1 mt-3">
                                                        <span>Contactar</span>
                                                        <i class="fa fa-whatsapp"></i>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
