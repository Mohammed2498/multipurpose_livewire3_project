<x-admin.master-modal functionName="submit" title="Edit Category" modalId="updateModal">
    <div class="row">
        <div class="col mb-0">
            <label for="name" class="form-label">Name</label>
            <input wire:model="name" type="text" id="name" class="form-control" placeholder="Name">
            <x-error-message property="name" />
        </div>
    </div>
</x-admin.master-modal>
