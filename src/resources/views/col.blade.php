<div class="col{{ isset($screen) ? "-$screen" : '' }}{{ isset($size) ? "-$size" : '' }}">
    {{ $slot }}
</div>