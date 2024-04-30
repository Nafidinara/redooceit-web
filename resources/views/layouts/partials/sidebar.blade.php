<x-mazer-sidebar :href="route('dashboard')" logo="{{asset('assets/static/images/logo/logo.png')}}">
    <x-mazer-sidebar-item icon="bi bi-grid-fill" :link="route('dashboard')" name="Dashboard" />
{{--    <x-mazer-sidebar-item icon="bi bi-stack" :link="route('dashboard')" name="Components">--}}
{{--        <x-mazer-sidebar-subitem :link="route('component.accordion')" name="Accordion" :active="false"/>--}}
{{--        <x-mazer-sidebar-subitem :link="route('component.table')" name="Table" :active="false"/>--}}
{{--        <x-mazer-sidebar-subitem :link="route('component.form')" name="Form" :active="false"/>--}}
{{--        <x-mazer-sidebar-subitem :link="route('component.card')" name="card" :active="false"/>--}}
{{--        <x-mazer-sidebar-subitem :link="route('component.carousel')" name="carousel" :active="false"/>--}}
{{--        <x-mazer-sidebar-subitem :link="route('component.progress')" name="progress" :active="false"/>--}}
{{--    </x-mazer-sidebar-item>--}}
    <x-mazer-sidebar-item icon="bi bi-recycle" :link="route('tps.index')" name="TPS">
    </x-mazer-sidebar-item>
    <x-mazer-sidebar-item icon="bi bi-trash3" :link="route('sampah.index')" name="Sampah">
    </x-mazer-sidebar-item>
    <x-mazer-sidebar-item icon="bi bi-view-list" :link="route('itemPenukaran.index')" name="Item Penukaran">
    </x-mazer-sidebar-item>
    <x-mazer-sidebar-item icon="bi bi-arrow-left-right" :link="route('penukaran.index')" name="Penukaran">
    </x-mazer-sidebar-item>
    <x-mazer-sidebar-item icon="bi bi-people-fill" :link="route('warga.index')" name="Warga">
    </x-mazer-sidebar-item>
    <x-mazer-sidebar-item icon="bi bi-stack" :link="route('setoranwarga.index')" name="Setoran Warga">
    </x-mazer-sidebar-item>
    <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right"></i> <span>Logout</span>
        </a>
    </li>
</x-mazer-sidebar>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
