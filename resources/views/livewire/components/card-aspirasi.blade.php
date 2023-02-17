<div class="col">
    <div class="card border-{{ true ? 'success' : 'danger' }} shadow bg-body"  id="">
        <div class="d-flex flex-column justify-content-between card-body text-success">
        <p class="card-text">{{ $aspirasi->keterangan }}</p>
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
            <a href="{{ route('aspirasi') }}/121" class="btn btn-sm btn-outline-secondary">Detail</a>
            </div>
            <small class="text-muted">{{ $aspirasi->created_at }}</small>
        </div>
        </div>
    </div>
</div>