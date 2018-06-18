<div id="{{ $id }}" class="carousel slide {{ isset($fade) && $fade ? 'carousel-fade' : '' }} {{ $class or '' }}" data-ride="carousel">
    <ol class="carousel-indicators">
        {{ $indicators }}
    </ol>
    <div class="carousel-inner">
        {{ $slot }}
    </div>
    <a class="carousel-control-prev" href="#{{ $id }}" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">{{ $previous or 'Previous' }}</span>
    </a>
    <a class="carousel-control-next" href="#{{ $id }}" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">{{ $next or 'Next' }}</span>
    </a>
</div>