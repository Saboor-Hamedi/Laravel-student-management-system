@props(['active' => false])
{{-- , 'href' => 'a' --}}
<a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}
 rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>
    {{ $slot }}
</a>

{{-- check if href is active make it inactive, if not active make it active--}}
{{-- @if ($active)
    <button class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium">
        {{ $slot }}
    </button>
@else
    <a href="{{ $href }}"
       class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
        {{ $slot }}
    </a>
@endif --}}
