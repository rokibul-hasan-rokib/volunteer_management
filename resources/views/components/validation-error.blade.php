@props(['error'])

@if($error)
    <span class="text-danger">{{ $error }}</span>
@endif
