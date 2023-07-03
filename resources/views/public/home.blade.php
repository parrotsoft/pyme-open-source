@extends('layouts.app')

@section('title', __('home.home'))
@section('content')
    <div class="container">

        <div class="row">
            <div class="col">
                <h1 class="title">Software Open Source para Pymes</h1>
            </div>
        </div>

        <livewire:search-pagination/>
    </div>
@endsection
