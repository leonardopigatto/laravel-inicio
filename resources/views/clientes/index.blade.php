<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between gap-5">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mt-1">
                {{ __('Clientes') }}
            </h2>
            <x-primary-button :href="route('clientes.create')">
                {{ __('Cadastrar') }}
            </x-primary-button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <table class="w-full dark:text-slate-100 whitespace-no-wrapw-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-center font-bold">
                            <th class="border px-6 py-4">Nome</th>
                            <th class="border px-6 py-4">Idade</th>
                            <th class="border px-6 py-4">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td class="border px-6 py-4">{{ $cliente->nome }}</td>
                                <td class="border px-6 py-4">{{ $cliente->idade }}</td>
                                <td class="border px-6 py-4">
                                    <div class="flex gap-5">
                                        <div>
                                            <x-secondary-button>
                                                {{ __('Editar') }}
                                            </x-secondary-button>
                                        </div>
                                        <div>
                                            <form method="post" action="{{ route('clientes.destroy', $cliente) }}">
                                                @csrf
                                                @method('delete')

                                                <x-danger-button>
                                                    {{ __('Excluir') }}
                                                </x-danger-button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
