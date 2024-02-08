{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>
        {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Logos" icon="la la-question" :link="backpack_url('logo')" />




<x-backpack::menu-item title="Products" icon="la la-question" :link="backpack_url('products')" />
<x-backpack::menu-item title="Waters" icon="la la-question" :link="backpack_url('water')" />

<x-backpack::menu-dropdown title="About" icon="la la-group">
    <x-backpack::menu-dropdown-item title="Abouts" icon="la la-map" :link="backpack_url('about')" />
    <x-backpack::menu-dropdown-item title="Directors" icon="la la-question" :link="backpack_url('director')" />
    <x-backpack::menu-dropdown-item title="Settings" icon="la la-check" :link="backpack_url('setting')" />
    <x-backpack::menu-dropdown-item title="Missions" icon="la la-map" :link="backpack_url('mission')" />
</x-backpack::menu-dropdown>
