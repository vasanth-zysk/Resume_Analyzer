<div class="flex flex-col items-center">
    <h3 class="text-lg font-semibold">Progress Circle Chart v2</h3>

    <div class="relative w-32 h-32">
        <svg class="w-full h-full" viewBox="0 0 100 100">
            <!-- Background Circle -->
            <circle cx="50" cy="50" r="45" stroke="#E5E7EB" stroke-width="10" fill="none"></circle>
            
            <!-- Progress Circle -->
            <circle cx="50" cy="50" r="45" stroke="#3B82F6" stroke-width="10" fill="none"
                stroke-dasharray="283"
                stroke-dashoffset="{{ 283 - (283 * $matchPercentage / 100) }}"
                stroke-linecap="round"
                transform="rotate(-90 50 50)">
            </circle>
        </svg>

        <!-- Percentage Text -->
        <div class="absolute inset-0 flex items-center justify-center text-2xl font-bold text-blue-600">
            {{ $matchPercentage }}%
        </div>
    </div>
</div>
