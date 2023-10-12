<div>
    <!-- Category Section Start -->
    @livewire('site.components.home.category-section')
    <!-- Category Section End -->

    <!-- Product Section Start -->
    @livewire('site.components.home.collection-products-section', ['slug' => 'fitness-y-nutricion'], key('fitness-y-nutricion'))
    <!-- Product Section End -->

    <!-- Product Section Start -->
    @livewire('site.components.home.collection-products-section', ['slug' => 'suplementos-top'], key('suplementos-top'))
    <!-- Product Section End -->
</div>
