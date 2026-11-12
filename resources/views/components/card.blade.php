@props(['bgColor' => 'white', 'color'])
<div {{$attributes}}->class("card card-text-$color card-bg-$bgColor")>
    <div class="card-header">
        {{ $title }}
    </div>
    <div class="card-body">
        @if ($slot->isEmpty())
        <p>No content available.</p>
        @else
        {{ $slot }}
        @endif
    </div>
    <div class="card-footer">
        {{ $footer }}
    </div>
</div>