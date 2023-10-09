@extends('front.master')
@section('contact-active', 'active')
@section('title', 'Conact')
@section('header-content')
    @include('front.partials.sub-header', ['pageName' => 'Contact'])
@endsection
@section('content')
    <!-- Contact Start -->
    @livewire('front.components.messaging-component')
    <!-- Contact End -->
@endsection
