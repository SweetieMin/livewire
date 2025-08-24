<div class="mt-4 flex flex-col gap-6">
    <flux:text class="text-center">
        {{ __('Vui lòng xác thực địa chỉ email của bạn bằng cách nhấp vào liên kết mà chúng tôi vừa gửi đến email của bạn.') }}
    </flux:text>

    @if (session('status') == 'verification-link-sent')
        <flux:text class="text-center font-medium !dark:text-green-400 !text-green-600">
            {{ __('Một liên kết xác thực mới đã được gửi đến địa chỉ email bạn cung cấp trong quá trình đăng ký.') }}
        </flux:text>
    @endif

    <div class="flex flex-col items-center justify-between space-y-3">
        <flux:button wire:click="sendVerification" variant="primary" class="w-full">
            {{ __('Gửi lại email xác thực') }}
        </flux:button>

        <flux:link class="text-sm cursor-pointer" wire:click="logout">
            {{ __('Đăng xuất') }}
        </flux:link>
    </div>
</div>
