<div class="">
    <form action="/blogs/{{$blog->slug}}/comment" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Send Comment</label>
            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
            <x-error name="body" />
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>
