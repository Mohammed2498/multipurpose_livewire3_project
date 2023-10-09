<x-admin.master-modal functionName="submit" title="Show Service" modalId="showModal">
    <div class="row">
        <div class="col mb-0">
            <label for="name" class="form-label">Name</label>
            <input wire:model="name" type="text" id="name" class="form-control" placeholder="Name">
            <x-error-message property="name" />
        </div>
    </div>
    <div class="row">
        <div class="col mb-0">
            <label for="description" class="form-label">Description</label>
            <textarea wire:model="description" id="description" class="form-control" placeholder="Description Here" cols="30"
                rows="10"></textarea>
            <x-error-message property="description" />
        </div>
    </div>
    <div class="row">
        <div class="col mb-0">
            <label for="icon" class="form-label">Icon</label>
            <input wire:model="icon" type="text" id="icon" class="form-control" placeholder="10">
            <x-error-message property="icon" />
        </div>
    </div>
</x-admin.master-modal>
