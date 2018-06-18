<div class="alert
            alert-{{ $type or 'primary' }}
            @if( isset($link) && $link ) alert-link @endif
            @if( isset($dismissible) && $dismissible ) alert-dismissible @endif
            {{ $class or '' }}"
            role="alert">

    @if( isset($dismissible) && $dismissible )
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    @endif

    <div class="alert-title">{{ $title }}</div>

    {{ $slot }}
</div>