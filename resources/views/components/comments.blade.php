<div class="list-group">
    @forelse ($blog->comments as $comment)
        <a href="#" class="mb-3 list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
                <small class="mb-2 text-muted">{{ $comment->user->name }}</small>
                <small> {{ $comment->created_at->diffForHumans() }} </small>
            </div>
            <h5 class="mb-1">{{ $comment->body }}</h5>
        </a>
    @empty
        <p class="mb-3 list-group-item list-group-item-action flex-column align-items-start">
            No one comment yet!
        </p>
    @endforelse
</div>
