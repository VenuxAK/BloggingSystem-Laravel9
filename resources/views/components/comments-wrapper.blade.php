<div class="card p-4">
    <h4 class="mb-4">Comments ({{count($blog->comments)}})</h4>
    <div class="">
        <x-comments :blog="$blog" />
    </div>
    @if (auth()->user())
        <div class="">
            <x-comment-form :blog=$blog />
        </div>
    @else
        <div class="text-center mt-4">
            <h5>Please <a href="/login"> Login </a> to comment </h5>
        </div>
    @endif

</div>
