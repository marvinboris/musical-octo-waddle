<div class="col-xl-4 col-lg-6 mb-3">
    <div class="card h-100 border-0 shadow">
        <div class="card-body d-flex">
            <div class="mr-3">
                <i class="{{ $icon }} text-red fa-3x"></i>
            </div>
            <div class="flex-column d-flex">
                <h4 class="text-montserrat-alt">{{ $name }}</h4>
                <div class="d-flex justify-content-between flex-column flex-fill">
                    <p>{{ Str::limit($details) }}</p>
                    <div class="d-flex justify-content-md-end">
                        <a href="#" data-toggle="modal" data-target="#{{ $link }}" class="font-weight-bold">{{ session('lang') === 'en' ? 'Learn more' : 'En savoir plus' }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="{{ $link }}" tabindex="-1" role="dialog" aria-labelledby="{{ $link }}Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-montserrat-alt font-weight-bold text-red" id="{{ $link }}Label">{{ $name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    @include($modal)
                </div>
            </div>
        </div>
    </div>
</div>