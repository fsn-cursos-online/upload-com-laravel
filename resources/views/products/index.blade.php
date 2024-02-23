<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Olá <strong>{{ Auth::user()->name }}</strong></p>
                </div>

                <div class="grid grid-cols-4 gap-4 p-6">
                    @foreach($products as $product)
                        <div class="photos">
                            <figure>
                                <img src="{{ asset("storage/{$product->product_file_name}") }}" alt="[imagem]">
                                <figcaption class="text-white text-center bg-red-800">R${{ $product->product_price }}</figcaption>
                            </figure>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
