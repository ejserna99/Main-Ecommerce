<section>
    <div class="container-fluid-lg">
        <div class="title">
            <h2>Navegar por categorías</h2>
            <span class="title-leaf">
                <svg class="icon-width">
                    <use xlink:href="{{ asset('svg/leaf.svg') }}#leaf"></use>
                </svg>
            </span>
            <p>Categorías principales de la semana</p>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-9">
                    @php
                        $delay = 0.3;
                    @endphp

                    @foreach ($this->categories as $category)
                        <div>
                            <a href="{{ route('category.show', $category->slug) }}" class="category-box wow fadeInUp"
                                title="{{ $category->name }}" data-wow-delay="{{ $delay }}s">
                                <div>
                                    <img src="{{ $category->getFirstMediaUrl($storageName) }}" class="blur-up lazyload"
                                        alt="{{ $category->name }}">
                                    <h5>{{ $category->name }}</h5>
                                </div>
                            </a>
                        </div>

                        @php
                            $delay += 0.05;
                        @endphp
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
