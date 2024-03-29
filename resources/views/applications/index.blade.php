@extends('layouts.app')
@section('title', __('home.application_management'))

@section('content')
    <div class="container">

        <div class="row">
            <div class="col">
                <h1>{{ __('home.application_management') }}</h1>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <a class="btn btn-primary float-end" href="{{ route('applications.create') }}">{{ __('home.new') }}</a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <livewire:application-table/>
            </div>
        </div>

    </div>
@endsection
