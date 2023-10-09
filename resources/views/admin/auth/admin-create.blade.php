<x-admin.master-modal functionName="submit" title="Add New Admin" modalId="createModal">
    <div class="row">
        <div class="col mb-0">
            <label for="name" class="form-label">Name</label>
            <input wire:model="name" type="text" id="name" class="form-control" placeholder="Name">
            <x-error-message property="name" />
        </div>
        <div class="col mb-0">
            <label for="email" class="form-label">Email</label>
            <input wire:model="email" type="email" id="email" class="form-control" placeholder="Email">
            <x-error-message property="email" />
        </div>
    </div>
    <div class="row">
        <div class="col mb-0">
            <label for="password" class="form-label">Password</label>
            <input wire:model="password" type="password" id="password" class="form-control"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
            <x-error-message property="password" />
        </div>
    </div>
    <div class="row">
        <div class="col mb-0">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input wire:model="password_confirmation" type="password" id="password_confirmation" class="form-control"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
            <x-error-message property="password_confirmation" />
        </div>
    </div>
</x-admin.master-modal>
