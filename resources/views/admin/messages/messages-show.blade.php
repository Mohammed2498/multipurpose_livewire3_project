<x-admin.master-modal functionName="submit" title="Show Message" modalId="showModal">
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
            <label for="message" class="form-label">Message</label>
            <textarea wire:model="message" id="message" class="form-control" placeholder="Message Here" cols="30"
                rows="10"></textarea>
            <x-error-message property="message" />
        </div>
    </div>
    <div class="row">
        <div class="col mb-0">
            <label for="subject" class="form-label">Subject</label>
            <input wire:model="subject" type="text" id="subject" class="form-control" placeholder="subject">
            <x-error-message property="subject" />
        </div>
    </div>
</x-admin.master-modal>
