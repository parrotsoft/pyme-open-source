<div>
    <div class="row mt-4">
        <div class="col-8">
            <div class="input-group mb-3">
                <input class="form-control form-control-lg" type="text" placeholder="Buscar" aria-label=".form-control-lg example"
                wire:model="searchTerm">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">{{ __('home.search') }}</button>
            </div>
        </div>
        <div class="col-4">
            <div class="dropdown float-end">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('home.sort_by') }}:
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" wire:click="sortBy('star')">{{ __('home.more_popular') }}</a></li>
                    <li><a class="dropdown-item" wire:click="sortBy('created_at')">{{ __('home.newer') }}</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="row mt-4">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ __('home.operative_systems') }}</h5>
                    @foreach($operativeSystems as $operativeSystem)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioSo" id="so{{ $operativeSystem->id }}"
                            wire:model="filterSO" value="{{ $operativeSystem->id }}">
                            <label class="form-check-label" for="so{{ $operativeSystem->id }}">
                                {{ $operativeSystem->description }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">{{ __('home.categories') }}</h5>
                    @foreach($categories as $category)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioCategory" id="category-{{ $category->id }}"
                                   wire:model="filterCategory" value="{{ $category->id }}">
                            <label class="form-check-label" for="category-{{ $category->id }}">
                                {{ $category->description }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="card">
                <div class="card-body">

                    @foreach($applications as $application)
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-2 d-flex justify-content-center align-items-center">
                                    <img src="{{ $application->image }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $application->name }}</h5>
                                        <p class="card-text">{{ $application->description }}</p>
                                        <p class="card-text"><small class="text-muted">{{ $application->updated_at->diffForHumans() }}</small></p>
                                        <h6>
                                            {{ __('home.operative_system') }} <span class="badge bg-secondary">{{ $application->operativeSystem->description }}</span>
                                            -
                                            {{ __('home.category') }} <span class="badge bg-info">{{ $application->category->description }}</span>
                                        </h6>
                                        <div class="float-end mb-4">
                                            <a href="#" class="btn btn-dark">{{ __('home.download') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            {{ $applications->links() }}
        </div>
    </div>
</div>
