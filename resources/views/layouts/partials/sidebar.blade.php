<x-mazer-sidebar :href="route('dashboard')" logo="asset('static/images/logo/logo.png')">
    <x-mazer-sidebar-item icon="bi bi-grid-fill" :link="route('dashboard')" name="Dashboard" />
    <x-mazer-sidebar-item icon="bi bi-stack" :link="route('dashboard')" name="Components">
        <x-mazer-sidebar-subitem :link="route('component.accordion')" name="Accordion" :active="false"/>
        <x-mazer-sidebar-subitem :link="route('component.table')" name="Table" :active="false"/>
        <x-mazer-sidebar-subitem :link="route('component.form')" name="Form" :active="false"/>
        <x-mazer-sidebar-subitem :link="route('component.card')" name="card" :active="false"/>
        <x-mazer-sidebar-subitem :link="route('component.carousel')" name="carousel" :active="false"/>
        <x-mazer-sidebar-subitem :link="route('component.progress')" name="progress" :active="false"/>
    </x-mazer-sidebar-item>
</x-mazer-sidebar>
