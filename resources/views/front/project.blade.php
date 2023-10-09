@extends('front.master')
@section('title', 'Project')
@section('project-active', 'active')
@section('header-content')
    @include('front.partials.sub-header', ['pageName' => 'Project'])
@endsection
@section('content')
    <!-- Projects Start -->
    @livewire('front.components.projects-component')
    <!-- Projects End -->
@endsection
