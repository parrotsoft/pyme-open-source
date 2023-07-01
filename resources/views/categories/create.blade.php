@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col">
                <h1>{{ __('home.new_category') }}</h1>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-8">
                <form method="POST" action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}" autocomplete="off">
                    @csrf

                    @if(isset($category))
                        @method('PUT')
                    @endif

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('register.name') }}</label>

                        <div class="col-md-6">
                            <input id="description" type="text" class="form-control @error('description') is-invalid
                             @enderror" name="description" value="{{ old('description', isset($category) ? $category->description : '') }}" required autocomplete="description"

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-0 mt-4">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ isset($category) ? __('home.update') : __('home.store') }}
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
