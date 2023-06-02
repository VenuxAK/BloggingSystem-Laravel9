@props(['name'])
@error($name)
    <p class="text-danger"> <b>{{ $message }}</b> </p>
@enderror
