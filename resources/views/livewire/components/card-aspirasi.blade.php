<div class="col">
    <div class="card border-secondary shadow bg-body"  id="">
        <div class="d-flex flex-column justify-content-between card-body">
            <h3>{{ $aspirasi->penduduk->nama }}</h1>
            <p class="card-text">{{ $aspirasi->keterangan }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <h4>Status : {{ $aspirasi->status }}</h4>
                <small class="text-muted">{{ $aspirasi->created_at }}</small>
            </div>
            @if($aspirasi->feedback)
            <div class="mt-2 pt-2 border-top border-secondary">
                <small>Feedback:</small> 
                <h5>
                    {{ $aspirasi->feedback }}
                </h5>
            </div>
            @endif
        </div>
    </div>
</div>