<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Olá <strong>{{ Auth::user()->name }}</strong></p>

                    {{-- form --}}
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label for="product_name">Nome do Produto</label>
                            <input type="text" name="product_name" id="product_name" class="w-full rounded" required autofocus>
                        </div>

                        <div class="mb-4">
                            <label for="product_price">Preço do Produto</label>
                            <input type="number" name="product_price" id="product_price" min="1" step="0.01" class="w-full rounded" required>
                        </div>

                        <div class="mb-4">
                            <label for="product_file_name">Selecione um arquivo de imagem</label>
                            <input type="file" name="product_file_name" id="product_file_name" class="w-full rounded" required>
                        </div>

                        <div class="mb-4">
                            <button type="reset" class="rounded bg-red-500 text-white py-1 px-4">Limpar</button>
                            <button type="submit" class="rounded bg-blue-500 text-white py-1 px-4">Cadastrar</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
