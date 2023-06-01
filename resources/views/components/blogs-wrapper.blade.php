<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            @if (request('category'))
                <x-category-blogs />
            @else
                <x-blogs />
            @endif
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <x-categories />
                <x-latest-blogs />
            </div>
        </div>
    </div>
</div>
