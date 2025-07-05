<!-- Success -->
@session('success')
    <div x-data="{ show: true }"
         x-cloak
         x-show="show"
         x-init="setTimeout(() => show = false, 3000)"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-2"
         class="fixed top-5 right-5 w-[320px] sm:w-[350px] flex items-start gap-3 bg-green-600 text-white p-4 rounded-lg shadow-xl z-50"
         role="alert">

        <div class="pt-0.5">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
        </div>

        <p class="mt-0.5 text-sm font-medium leading-snug flex-1">{{ $value }}</p>
    </div>
@endSession
    
<!-- Error -->
@session('error')
    <div x-data="{ show: true }"
         x-cloak
         x-show="show"
         x-init="setTimeout(() => show = false, 3000)"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-2"
         class="fixed top-5 right-5 w-[320px] sm:w-[350px] flex items-start gap-3 bg-red-600 text-white p-4 rounded-lg shadow-xl z-50"
         role="alert">

        <div class="pt-0.5">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </div>

        <p class="mt-0.5 text-sm font-medium leading-snug flex-1">{{ $value }}</p>
    </div>
@endSession

<!-- Warning -->
@session('warning')
    <div x-data="{ show: true }"
         x-cloak
         x-show="show"
         x-init="setTimeout(() => show = false, 3000)"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-2"
         class="fixed top-5 right-5 w-[320px] sm:w-[350px] flex items-start gap-3 bg-yellow-500 text-white p-4 rounded-lg shadow-xl z-50"
         role="alert">

        <div class="pt-0.5">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z"/>
            </svg>
        </div>

        <p class="mt-0.5 text-sm font-medium leading-snug flex-1">{{ $value }}</p>
    </div>
@endSession

<!-- Info -->
@session('info')
    <div x-data="{ show: true }"
         x-cloak
         x-show="show"
         x-init="setTimeout(() => show = false, 3000)"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-2"
         class="fixed top-5 right-5 w-[320px] sm:w-[350px] flex items-start gap-3 bg-blue-600 text-white p-4 rounded-lg shadow-xl z-50"
         role="alert">

        <div class="pt-0.5">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z"/>
            </svg>
        </div>

        <p class="mt-0.5 text-sm font-medium leading-snug flex-1">{{ $value }}</p>
    </div>
@endSession
