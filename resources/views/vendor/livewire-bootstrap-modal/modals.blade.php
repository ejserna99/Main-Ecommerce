<div class="modal fade theme-modal" id="livewire-bootstrap-modal" tabindex="-1" data-bs-backdrop="static"
    data-bs-keyboard="false" wire:ignore.self>
    @if ($alias)
        @livewire($alias, $params, key($alias))
    @endif
</div>
