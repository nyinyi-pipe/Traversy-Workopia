{{-- @props(['url' => '/', 'active' => false, 'icon' => null]) {{-- default Values --}}

{{-- <a href="{{ $url }}" class="text-white hover:underline py-2
{{ $active ? 'text-yellow-500 font-bold' : '' }}">

    @if ($icon)
    <i class="fa fa-{{ $icon }}"></i>
    @endif
    {{ $slot }}
</a> --}}

{{-- /// Desktop Menu Finished /// --}}


@props(['url' => '/', 'active' => false, 'icon' => null,'mobile'=>null]) {{-- default Values --}}

@if ($mobile)
<a href="{{ $url }}" class="block px-4 py-2 hover:bg-blue-700
{{ $active ? 'text-yellow-500 font-bold' : '' }}">
    @if ($icon)
    <i class="fa fa-{{ $icon }} mr-1"></i>
    @endif
    {{$slot}}
</a>

@else
<a href="{{ $url }}" class="text-white hover:underline py-2
{{ $active ? 'text-yellow-500 font-bold' : '' }}">

    @if ($icon)
    <i class="fa fa-{{ $icon }}"></i>
    @endif
    {{ $slot }}
</a>
@endif