@props(['title' => __('Confirm Password'), 'content' => __('For your security, please confirm your password to continue.'), 'button' => __('Confirm')])

@php
    $confirmableId = md5($attributes->wire('then'));
@endphp

<span
    {{ $attributes->wire('then') }}
    x-data
    x-ref="span"
    x-on:click="$wire.startConfirmingPassword('{{ $confirmableId }}')"
    x-on:password-confirmed.window="setTimeout(() => $event.detail.id === '{{ $confirmableId }}' && $refs.span.dispatchEvent(new CustomEvent('then', { bubbles: false })), 250);"
>
    {{ $slot }}
</span>

@once
<x-jet-dialog-modal wire:model="confirmingPassword">
    <x-slot name="title">
        <div class="flex flex-row justify-between">
            {{ $title }}
            <span class="fal fa-times cursor-pointer text-red-500" wire:click="stopConfirmingPassword" wire:loading.attr="disabled"></span>
        </div>
    </x-slot>

    <x-slot name="content">
        {{ $content }}

        <div class="mt-4" x-data="{}" x-on:confirming-password.window="setTimeout(() => $refs.confirmable_password.focus(), 250)">
            <x-jet-input type="password" class="mt-1 block w-3/4" placeholder="{{ __('Password') }}"
                        x-ref="confirmable_password"
                        wire:model.defer="confirmablePassword"
                        wire:keydown.enter="confirmPassword" />

            <x-jet-input-error for="confirmable_password" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="footer">
        <div class="flex flex-row justify-end">

            <x-forms.button-success class="ml-2" dusk="confirm-password-button" wire:click="confirmPassword" wire:loading.attr="disabled">
                {{ $button }} <i class="fal fa-arrow-right"></i>
            </x-forms.button-success>
        </div>

    </x-slot>
</x-jet-dialog-modal>
@endonce
