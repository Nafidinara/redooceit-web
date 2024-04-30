@props(['link', 'name', 'active' => false])
<li class="submenu-item {{ $active ?? 'active' }} {{ $slot->isEmpty() ? '' : 'has-sub' }}">
    <a href="{{ $link }}" class="submenu-link">{{ $name }}</a>
    @if (!$slot->isEmpty())
        <ul class="submenu {{ $active ?? 'active' }}">
            {{ $slot ?? '' }}
        </ul>
    @endif
</li>
