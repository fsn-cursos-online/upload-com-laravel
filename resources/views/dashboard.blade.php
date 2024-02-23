<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Olá <strong>{{ Auth::user()->name }}</strong></p>

                    <p>
                        <a href="{{ route('product.create') }}" class="bg-blue-500 rounded text-white p-2">Cadastrar Produto</a>
                        <a href="{{ route('product.index') }}" class="bg-purple-500 rounded text-white p-2">Ver Produtos</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
