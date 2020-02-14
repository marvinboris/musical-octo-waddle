<div class="col-sm-6 col-md-4 col-lg-3 mb-3">
    <div class="card border-0 shadow">
        <div class="card-body">
            <h1 class="text-red m-0 pl-3"><em>"</em></h1>
            <em class="text-center">{{ $citation }}</em>
            <h1 class="text-red m-0 text-center"><em>"</em></h1>
        </div>
        <div class="d-flex justify-content-center">
            <div class="rounded-circle overflow-hidden" style="width: 90px; height: 90px; background-position: center; background-image: url('{{ $img }}'); background-size: cover;">
            </div>
        </div>
        <p class="text-center">
            <strong>{{ $name }}</strong><br><em>{{ $title }}</em>
        </p>
    </div>
</div>