@extends('layouts.app')

@section('title', __('home.categories_management'))

@section('content')
    <div class="container">

        <div class="row">
            <div class="col">
                <h1>{{ __('home.categories_management') }}</h1>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <a class="btn btn-primary float-end" href="{{ route('categories.create') }}">{{ __('home.new') }}</a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <livewire:category-table/>
            </div>
        </div>

    </div>
@endsection
