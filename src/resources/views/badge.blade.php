<{{ $element or 'span' }} class="badge
            badge-{{ $type or 'primary' }}
            @if( isset($pill) && $pill ) badge-pull @endif
            @if( isset($dismissible) && $dismissible ) alert-dismissible @endif
            {{ $class or '' }}"
            @if( isset($element) && $element == 'a' ) href="{{ $href or '#' }}" @endif>
    {{ $slot }}
</{{ $element or 'span' }}>