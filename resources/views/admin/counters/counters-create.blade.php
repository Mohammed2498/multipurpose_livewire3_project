<x-admin.master-modal functionName="submit" title="Add New Counter" modalId="createModal">
    <div class="row">
        <div class="col mb-0">
            <label for="name" class="form-label">Name</label>
            <input wire:model="name" type="text" id="name" class="form-control" placeholder="Name">
            <x-error-message property="name" />
        </div>
        <div class="col mb-0">
            <label for="count" class="form-label">Count</label>
            <input wire:model="count" type="number" id="count" class="form-control" placeholder="10">
            <x-error-message property="count" />
        </div>
    </div>
    <div class="row">
        <div class="col mb-0">
            <label for="icon" class="form-label">Icon</label>
            <input wire:model="icon" type="text" id="icon" class="form-control" placeholder="Icon">
            <x-error-message property="icon" />
        </div>
    </div>
</x-admin.master-modal>
