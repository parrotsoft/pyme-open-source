@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col">
                <h1>{{ __('home.new_application') }}</h1>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-8">
                <form method="POST" action="{{ route('applications.store') }}" autocomplete="off">
                    @csrf

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('home.operative_system') }}</label>

                        <div class="col-md-6">
                            <select class="form-control @error('operative_system_id') is-invalid @enderror"  name="operative_system_id" id="operative_system_id" autofocus>
                                <option selected disabled>Seleccione una opción</option>
                                @foreach($operativeSystems as $operativeSystem)
                                    <option value="{{ $operativeSystem->id }}">{{ $operativeSystem->description }}</option>
                                @endforeach
                            </select>

                            @error('operative_system_id')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('home.category') }}</label>

                        <div class="col-md-6">
                            <select class="form-control @error('category_id') is-invalid @enderror"  name="category_id" id="category_id" >
                                <option selected disabled>Seleccione una opción</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->description }}</option>
                                @endforeach
                            </select>

                            @error('category_id')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('register.name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" >

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('home.description') }}</label>

                        <div class="col-md-6">
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="10"></textarea>

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('home.image') }}</label>

                        <div class="col-md-6">
                            <input id="image" name="image" type="text" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}" required>

                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('home.link') }}</label>

                        <div class="col-md-6">
                            <input id="link" type="url" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') }}">

                            @error('link')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('home.version') }}</label>

                        <div class="col-md-6">
                            <input id="version" type="text" class="form-control @error('version') is-invalid @enderror" name="version" value="{{ old('version') }}">

                            @error('version')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tutorial_link" class="col-md-4 col-form-label text-md-end">{{ __('home.tutorial') }}</label>

                        <div class="col-md-6">
                            <input id="tutorial_link" type="url" class="form-control @error('tutorial_link') is-invalid @enderror" name="tutorial_link" value="{{ old('tutorial_link') }}">

                            @error('tutorial_link')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>



                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('home.star') }}</label>

                        <div class="col-md-6">
                            <select name="star" id="star" class="form-control @error('star') is-invalid @enderror">
                                <option disabled selected>Seleccione una opción</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                            @error('star')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('home.store') }}
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection
