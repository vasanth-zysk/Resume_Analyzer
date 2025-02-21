@php
    $percentage = $getState() ?? 0;
@endphp

<div class="flex items-center justify-center">
    <div class="relative w-16 h-16">
        <svg class="w-full h-full" viewBox="0 0 100 100">
            <circle class="text-gray-200" stroke-width="8" stroke="currentColor" fill="transparent" r="45" cx="50" cy="50"></circle>
            <circle class="text-primary-500" stroke-width="8" stroke="currentColor" fill="transparent" r="45" cx="50" cy="50"
                stroke-dasharray="282.7"
                stroke-dashoffset="{{ 282.7 - (282.7 * $percentage / 100) }}"
                transform="rotate(-90 50 50)">
            </circle>
        </svg>

        <div class="absolute inset-0 flex items-center justify-center text-sm font-medium text-primary-600">
            {{ number_format($percentage, 0) }}%
        </div>
    </div>
</div>
