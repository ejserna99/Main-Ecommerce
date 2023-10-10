<div class="view-modal">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row g-sm-4 g-2">
                    <div class="col-lg-6">
                        <div class="slider-image">
                            <img src="{{ $product->getFirstMediaUrl($storageName, 'large') }}"
                                class="img-fluid blur-up lazyload" alt="{{ $product->name }}">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="right-sidebar-modal">
                            <h4 class="title-name">{{ $product->name }}</h4>

                            <div class="d-flex align-items-center">
                                @if ($price = $product->getPriceAmount())
                                    <del class="text-danger d-inline-block" style="min-height: 17px">
                                        @if ($oldPriceAmount = $product->getOldPriceAmount())
                                            <small class="me-2">${{ $oldPriceAmount->formatted }}</small>
                                        @endif
                                    </del>

                                    <h4 class="price">${{ $price->formatted }}</h4>
                                @endif
                            </div>

                            <div class="product-rating">
                                <x-rating :rating="$product->ratingPercent()" />
                                <span class="ms-2">{{ $product->countRating() }} Reseñas</span>
                            </div>

                            <div class="product-detail">
                                <h4>Detalles de producto:</h4>
                                {!! $product->description !!}
                            </div>

                            <table>
                                @if ($brand = $product->brand)
                                    <tr>
                                        <td>
                                            <h5>Marca:</h5>
                                        </td>
                                        <td>
                                            <h6>{{ $brand->name }}</h6>
                                        </td>
                                    </tr>
                                @endif

                                <tr>
                                    <td>
                                        <h5>Código:</h5>
                                    </td>
                                    <td>
                                        <h6>{{ $product->sku ?? 'N/A' }}</h6>
                                    </td>
                                </tr>

                                @foreach ($product->attributes as $attributeProduct)
                                    @if (!$attributeProduct->attribute->is_enabled)
                                        @continue
                                    @endif

                                    <tr>
                                        <td>
                                            <h5>{{ $attributeProduct->attribute->name }}:</h5>
                                        </td>
                                        <td>
                                            <h6>{{ $attributeProduct->real_value }}</h6>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>

                            @if ($product->variations->count() > 0)
                                <div class="select-size">
                                    <h4>Opciones:</h4>
                                    <select class="form-select select-form-size">
                                        <option value="{{ $product->id }}" selected>Selecciona una opción</option>

                                        @foreach ($product->variations as $variation)
                                            @if (!$variation->is_visible)
                                                @continue
                                            @endif

                                            <option value="{{ $variation->id }}">
                                                {{ $variation->name }} -
                                                ${{ $variation->getPriceAmount()?->formated ?? '0' }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            @endif

                            <div class="modal-button">
                                <button onclick="location.href = 'cart.html';" class="btn btn-md add-cart-button icon">
                                    Añadir al carrito
                                </button>

                                <a href="{{ route('product.show', $product->slug) }}"
                                    class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                    Ver más detalles
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
