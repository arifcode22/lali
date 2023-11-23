<div>
    <x-slot:header>
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
            <a wire:navigate href="{{ route('admin.user.index') }}" class="hover:underline">
                {{ __('User') }}
            </a>
            /
            <a wire:navigate href="{{ route('admin.user.show', $user) }}" class="inline-flex hover:underline">
                <span class="sm:hidden">
                    {{ Str::limit($user->name, 12, ' ...') }}
                </span>
                <span class="hidden sm:block">{{ $user->name }}</span>
            </a>
            /
            {{ __('Edit') }}
        </h2>
    </x-slot:header>

    <div class="py-2 space-y-2 sm:py-8 sm:space-y-8">
        <x-form-card submit="updateUser" maxWidth="full" title="{{ __('Edit User') }}"
            description="{{ __('Edit user information.') }}">
            <x-slot:form>
                {{-- Name --}}
                <div>
                    <x-label for="name" value="{{ __('Name') }}" required />
                    <x-text-input id="name" type="text" class="block w-full mt-1" wire:model="name" required
                        autofocus autocomplete="name" placeholder="{{ __('Full Name') }}" />
                    <x-input-error for="name" class="mt-2" />
                </div>

                {{-- Email --}}
                <div>
                    <x-label for="email" value="{{ __('Email') }}" required />
                    <x-text-input id="email" type="text" class="block w-full mt-1" wire:model="email" required
                        autocomplete="email" placeholder="{{ __('example@mail.com') }}" />
                    <x-input-error for="email" class="mt-2" />
                </div>
            </x-slot:form>

            <x-slot:actions>
                <x-button wire:loading.attr="disabled">
                    {{ __('Save') }}
                </x-button>

                <x-secondary-button wire:click="cancelEdit" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-secondary-button>
            </x-slot:actions>
        </x-form-card>
    </div>
</div>
