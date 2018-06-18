@php( $element = isset($element) ? $element : 'button' )
<{{ $element }} class="btn
            btn-{{ isset($outline) ? "outline-" : '' }}{{ $type or 'primary' }}
            @if( isset($link) && $link ) alert-link @endif
            @if( isset($block) && $block ) block @endif
            @if( isset($active) && $active ) active @endif
            {{ isset($size) ? 'btn-'.$size : '' }}
            @if( isset($dismissible) && $dismissible ) alert-dismissible @endif
            @if( isset($disabled) && $disabled && $element != 'a' ) disabled @endif
            {{ $class or '' }}"
            @if( isset($element) && $element == 'a' ) href="{{ $href or '#' }}" @endif
            @if( isset($disabled) && $disabled && $element == 'a' ) disabled aria-disabled="true" @endif>

    {{ $slot }}
</{{ $element }}>