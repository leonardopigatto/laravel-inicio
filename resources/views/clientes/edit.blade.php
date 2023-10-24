<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Atualização de cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <form method="post" action="{{ route('clientes.update', $cliente) }}" class="space-y-6">
                    @csrf
                    @method('put')

                    <div>
                        <x-input-label for="nome" :value="__('Nome')" />
                        <x-text-input id="nome" name="nome" type="text" class="mt-1 block w-full" :value="old('nome', $cliente->nome)" required autofocus autocomplete="nome" />
                        <x-input-error class="mt-2" :messages="$errors->get('nome')" />
                    </div>

                    <div>
                        <x-input-label for="idade" :value="__('Idade')" />
                        <x-text-input id="idade" name="idade" type="number" min="0" class="mt-1 block w-full" :value="old('idade', $cliente->idade)" required autofocus autocomplete="idade" />
                        <x-input-error class="mt-2" :messages="$errors->get('idade')" />
                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Atualizar') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
