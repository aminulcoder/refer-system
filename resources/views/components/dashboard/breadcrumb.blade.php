<ol class="flex items-center min-w-0 p-2 whitespace-nowrap" aria-label="Breadcrumb">
    <li class="text-sm">
        <a href="{{ route('dashboard') }}" class="flex items-center text-gray-500 hover:text-blue-600">
            Dashboard
            <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-400 dark:text-gray-600" width="16"
                height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg>
        </a>
    </li>
    <li class="text-sm">
        <a href="{{ route($route) }}" class="flex items-center text-gray-500 hover:text-blue-600">
            {{ $title }}

        </a>
    </li>
    @if (isset($subpage))
        <li class="text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
            <span class="flex items-center text-gray-500 hover:text-blue-600">
                <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-400 dark:text-gray-600"
                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
                {{ $subpage }}
            </span>
        </li>
    @endif

</ol>
{{-- // aminul --}}
{{-- njklfhakb/h --}}