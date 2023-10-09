@extends('admin.master')
@section('title', 'Skills')
@section('skills-active', 'active')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">Skills</h4>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm btn-primary mb-2  mx-3" data-bs-toggle="modal"
                data-bs-target="#createModal">
                Add New
            </button>
            <!-- Modal -->
            @livewire('admin.skills.skills-create')
        </div>
        <div class="card mb-4">
            <div class="card-body">
                @livewire('admin.skills.skills-data')
            </div>
        </div>
        @livewire('admin.skills.skills-update')
        @livewire('admin.skills.skills-delete')
        @livewire('admin.skills.skills-show')
    </div>
@endsection
