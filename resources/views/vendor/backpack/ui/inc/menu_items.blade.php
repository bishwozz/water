{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>
        {{ trans('backpack::base.dashboard') }}</a></li>
<x-backpack::menu-item title="Users" icon="las la-user" :link="backpack_url('user')" />
<x-backpack::menu-item title="Logos" icon="las la-bell" :link="backpack_url('logo')" />
<x-backpack::menu-dropdown title="Raw Mater" icon="la la-group">
    <x-backpack::menu-dropdown-item title="Products" icon="lab la-product-hunt" :link="backpack_url('products')" />
    <x-backpack::menu-dropdown-item title="Images" icon="las la-Images" :link="backpack_url('image')" />
</x-backpack::menu-dropdown>
<x-backpack::menu-dropdown title="Water" icon="la la-group">
    <x-backpack::menu-dropdown-item title="Waters" icon="la la-question" :link="backpack_url('water')" />
    <x-backpack::menu-dropdown-item title="Wtrs" icon="la la-question" :link="backpack_url('wtr')" />
</x-backpack::menu-dropdown>
<x-backpack::menu-dropdown title="About" icon="la la-group">
    <x-backpack::menu-dropdown-item title="Abouts" icon="la la-map" :link="backpack_url('about')" />
    <x-backpack::menu-dropdown-item title="Directors" icon="la la-question" :link="backpack_url('director')" />
    <x-backpack::menu-dropdown-item title="Settings" icon="la la-check" :link="backpack_url('setting')" />
    <x-backpack::menu-dropdown-item title="Missions" icon="la la-map" :link="backpack_url('mission')" />
</x-backpack::menu-dropdown>


<x-backpack::menu-item title="Permissions" icon="la la-question" :link="backpack_url('permission')" />
<x-backpack::menu-item title="Roles" icon="la la-question" :link="backpack_url('role')" />

@hasrole('superadmin')
    <x-backpack::menu-item title="Bills" icon="la la-question" :link="backpack_url('bill')" />
    <x-backpack::menu-item title="Sales" icon="la la-question" :link="backpack_url('sales')" />
    <x-backpack::menu-item title="Stores" icon="la la-question" :link="backpack_url('store')" />
    <x-backpack::menu-item title="Imports" icon="la la-question" :link="backpack_url('import')" />
@endhasrole


{{--  {{ dd(backpack_user()->hasrole('superadmin')) }}  --}}
