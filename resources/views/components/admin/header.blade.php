@props(['name'])
<div class="page-header">
    <h3 class="page-title"> {{ $name }} </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"> {{ $name }} </li>
        </ol>
    </nav>
</div>
