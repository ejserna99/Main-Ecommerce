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

                            <div wire:ignore class="product-rating">
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
                                    <select class="form-select form-control" wire:model="variant"
                                        style="width: 260px; height: 40px;">
                                        <option value="{{ $product->id }}" selected>
                                            {{ str_limit($product->name, 26) }}</option>

                                        @foreach ($product->variations as $variation)
                                            @if (!$variation->is_visible)
                                                @continue
                                            @endif

                                            <option value="{{ $variation->id }}">
                                                {{ str_limit($variation->name, 20) }} -
                                                ${{ $variation->getPriceAmount()?->formated ?? '0' }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            @endif

                            @if ($product->getPriceAmount() && $this->currentProduct->stock > 0)
                                <div class="qty-box product-qty m-0">
                                    <div class="select-size">
                                        <h4>Cantidad:</h4>
                                        <div class="input-group h-100">
                                            <button type="button" wire:click="decrement" wire:loading.attr="disabled"
                                                wire:target="decrement" @disabled(!$this->canDecrement)>
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>

                                            <input class="form-control input-number qty-input" type="number"
                                                wire:model="quantity" min="0">

                                            <button type="button" wire:click="increment" wire:loading.attr="disabled"
                                                wire:target="increment" @disabled(!$this->canIncrement)>
                                                <i @class([
                                                    'fa fa-plus' => $this->canIncrement,
                                                    'fas fa-ban text-danger' => !$this->canIncrement,
                                                ]) aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="modal-button align-items-center">
                                @if ($product->getPriceAmount() && $this->currentProduct->stock > 0)
                                    <button wire:click="addToCart" wire:loading.attr="disabled"
                                        class="btn btn-md add-cart-button icon">
                                        Añadir al carrito

                                        <div wire:loading wire:target="addToCart" class="spinner-border text-light ms-2"
                                            role="status" style="width: 1rem; height: 1rem;">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </button>
                                @elseif ($this->currentProduct->stock < 1)
                                    <p class="text-danger">Sin inventario</p>
                                @else
                                    <a href="#" class="btn btn-md add-cart-button icon">
                                        <span>Contactar</span>
                                        <i class="fa fa-whatsapp ms-2"></i>
                                    </a>
                                @endif

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
