<x-mazer-sidebar :href="route('dashboard')" logo="{{asset('assets/static/images/logo/logo.svg')}}">
    <x-mazer-sidebar-item icon="bi bi-grid-fill" :link="route('dashboard')" name="Dashboard" />
    <x-mazer-sidebar-item icon="bi bi-stack" :link="route('dashboard')" name="Components">
        <x-mazer-sidebar-subitem :link="route('component.accordion')" name="Accordion" :active="false"/>
        <x-mazer-sidebar-subitem :link="route('component.table')" name="Table" :active="false"/>
        <x-mazer-sidebar-subitem :link="route('component.form')" name="Form" :active="false"/>
        <x-mazer-sidebar-subitem :link="route('component.card')" name="card" :active="false"/>
        <x-mazer-sidebar-subitem :link="route('component.carousel')" name="carousel" :active="false"/>
        <x-mazer-sidebar-subitem :link="route('component.progress')" name="progress" :active="false"/>
    </x-mazer-sidebar-item>
    <x-mazer-sidebar-item icon="bi bi-stack" :link="route('dashboard')" name="Pengguna">
        <x-mazer-sidebar-subitem :link="route('pengguna.user')" name="tableUser" :active="false"/>
    </x-mazer-sidebar-item>
    <x-mazer-sidebar-item icon="bi bi-stack" :link="route('tps.index')" name="TPS">
    </x-mazer-sidebar-item>
    <x-mazer-sidebar-item icon="bi bi-stack" :link="route('sampah.index')" name="Sampah">
    </x-mazer-sidebar-item>
    <x-mazer-sidebar-item icon="bi bi-stack" :link="route('penukaran.index')" name="penukaran">
    </x-mazer-sidebar-item>
    <x-mazer-sidebar-item icon="bi bi-stack" :link="route('warga.index')" name="WARGA">
    </x-mazer-sidebar-item>
    <x-mazer-sidebar-item icon="bi bi-stack" :link="route('dashboard')" name="Form Elements">
        <x-mazer-sidebar-subitem :link="route('pengguna.user')" name="tableUser" :active="false"/>
    </x-mazer-sidebar-item>
    <x-mazer-sidebar-item icon="bi bi-stack" :link="route('itemPenukaran.index')" name="Item Penukaran">
    </x-mazer-sidebar-item>
</x-mazer-sidebar>
