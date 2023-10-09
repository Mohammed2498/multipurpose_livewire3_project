<x-admin.master-modal functionName="submit" title="Add New Project" modalId="createModal">
    <div class="row">
        <div class="col mb-0">
            <label for="name" class="form-label">Name</label>
            <input wire:model="name" type="text" id="name" class="form-control" placeholder="Name">
            <x-error-message property="name" />
        </div>
        <div class="col mb-0">
            <label for="link" class="form-label">Link</label>
            <input wire:model="link" type="text" id="link" class="form-control" placeholder="Url">
            <x-error-message property="link" />
        </div>
    </div>
    <div class="row">
        <div class="col mb-0">
            <label for="image" class="form-label">Image</label>
            <input wire:model="image" type="file" id="image" class="form-control" placeholder="image">
            <x-error-message property="image" />
            <div wire:loading wire:target="image">Uploading...</div>
        </div>
        <div class="col mb-0">
            <label for="link" class="form-label">Category</label>
            <select wire:model="category_id" type="text" id="category_id" class="form-control"
                placeholder="category_id">
                <option value="" selected>Select Category</option>
                @if (count($categories) > 0)
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" wire:key="category-{{ $category->id }}">
                            {{ $category->name }}</option>
                    @endforeach
                @endif
            </select>
            <x-error-message property="category_id" />
        </div>
    </div>
    @if ($image)
        <div class="my-4">
            <img src="{{ $image->temporaryUrl() }}" width="100%" height="100%">
        </div>
    @endif
    <div class="row">
        <div class="col mb-0">
            <label for="description" class="form-label">Description</label>
            <textarea wire:model="description" id="description" class="form-control" placeholder="Description Here" cols="30"
                rows="7"></textarea>
            <x-error-message property="description" />
        </div>
    </div>

</x-admin.master-modal>
