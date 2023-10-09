{{-- <x-create-modal title="Add New Skill">
    <div class="row">
        <div class="col mb-0">
            <label for="name" class="form-label">Name</label>
            <input wire:model="name" type="text" id="name" class="form-control" placeholder="Name">
            <x-error-message property="name" />
        </div>
        <div class="col mb-0">
            <label for="progress" class="form-label">Progress</label>
            <input wire:model="progress" type="number" id="progress" class="form-control" placeholder="10">
            <x-error-message property="progress" />
        </div>
    </div>
</x-create-modal> --}}

<x-admin.master-modal functionName="submit" title="Add New Skill" modalId="createModal">
    
    <div class="row">
        <div class="col mb-0">
            <label for="name" class="form-label">Name</label>
            <input wire:model="name" type="text" id="name" class="form-control" placeholder="Name">
            <x-error-message property="name" />
        </div>
        <div class="col mb-0">
            <label for="progress" class="form-label">Progress</label>
            <input wire:model="progress" type="number" id="progress" class="form-control" placeholder="10">
            <x-error-message property="progress" />
        </div>
    </div>
</x-admin.master-modal>
