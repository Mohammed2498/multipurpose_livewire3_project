<form class="row" wire:submit.prevent="update">
    <x-flash-message />
    <div class="col-md-6">
        <label for="name" class="form-label">Name</label>
        <input wire:model="settings.name" id="name" type="text" class="form-control" placeholder="Name">
        <x-error-message property="settings.name" />
    </div>
    <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input wire:model="settings.email" id="email" type="text" class="form-control" placeholder="Email">
        <x-error-message property="settings.email" />
    </div>
    <div class="col-md-6 mt-2">
        <label for="address" class="form-label">Address</label>
        <input wire:model="settings.address" id="address" type="text" class="form-control" placeholder="Address">
        <x-error-message property="settings.address" />
    </div>
    <div class="col-md-6 mt-2">
        <label for="phone" class="form-label">Phone</label>
        <input wire:model="settings.phone" id="phone" type="text" class="form-control" placeholder="Phone">
        <x-error-message property="settings.phone" />
    </div>
    <div class="col-md-6 mt-2">
        <label for="facebook" class="form-label">Facebook</label>
        <input wire:model="settings.facebook" id="facebook" type="text" class="form-control" placeholder="Facebook">
        <x-error-message property="settings.facebook" />
    </div>
    <div class="col-md-6 mt-2">
        <label for="instagram" class="form-label">Instagram</label>
        <input wire:model="settings.instagram" id="instagram" type="text" class="form-control"
            placeholder="Instagram">
        <x-error-message property="settings.instagram" />
    </div>
    <div class="col-md-6 mt-2">
        <label for="twitter" class="form-label">Twitter</label>
        <input wire:model="settings.twitter" id="twitter" type="text" class="form-control" placeholder="Twitter">
        <x-error-message property="settings.twitter" />
    </div>
    <div class="col-md-6 mt-2">
        <label for="linkedin" class="form-label">LinkedIn</label>
        <input wire:model="settings.linkedin" id="linkedin" type="text" class="form-control" placeholder="LinkedIn">
        <x-error-message property="settings.linkedin" />
    </div>
    <div class="col-md-12 mt-2">
        <button class="btn btn-primary">
            <x-loading-state buttonName="Confirm" target="update" />
        </button>
    </div>
</form>
