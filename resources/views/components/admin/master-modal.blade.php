<div wire:ignore.self class="modal fade" id="{{ $modalId }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="{{ $functionName }}">
                <div class="modal-body">
                    <div class="row">
                        {{ $slot }}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    @if ($modalId != 'showModal')
                        <button type="submit" class="btn btn-primary">
                            <x-loading-state buttonName="Submit" target="{{ $functionName }}" />
                        </button>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
