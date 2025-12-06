@props([
    'link' => '',
    'title' => '',
    'site_name' => '',
    'description' => '',
    'image' => '',
])

<a href="{{ $link }}"
   target="_blank"
   rel="noopener noreferrer"
   class="block w-full border rounded-xl overflow-hidden hover:bg-gray-50 transition">
    <div class="flex flex-col sm:flex-row">

        {{-- Image (optional) --}}
        @if($image)
            <div class="w-full sm:w-48 h-40 sm:h-auto flex-shrink-0 bg-gray-100">
                <img src="{{ $image }}"
                     alt="{{ $title }}"
                     class="w-full h-full object-cover">
            </div>
        @endif

        <div class="p-4 flex flex-col justify-between">
            <div>
                {{-- Site Name --}}
                @if($site_name)
                    <div class="text-xs text-gray-500 mb-1">
                        {{ $site_name }}
                    </div>
                @endif

                {{-- Title --}}
                @if($title)
                    <div class="text-lg font-semibold text-gray-900 leading-snug line-clamp-2">
                        {{ $title }}
                    </div>
                @endif

                {{-- Description --}}
                @if($description)
                    <p class="text-sm text-gray-600 mt-2 line-clamp-3">
                        {{ $description }}
                    </p>
                @endif
            </div>

            {{-- URL --}}
            <div class="text-xs text-blue-600 mt-3 truncate">
                {{ $link }}
            </div>
        </div>
    </div>
</a>
