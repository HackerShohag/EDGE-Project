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
                    <h2 class="text-2xl font-bold mb-4 cursor-pointer" id="toggleAddProduct">Add Product</h2>
                    <div id="addProductForm" class="hidden">
                        @include('products.create')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('toggleAddProduct').addEventListener('click', function() {
            var form = document.getElementById('addProductForm');
            if (form.classList.contains('hidden')) {
                form.classList.remove('hidden');
            } else {
                form.classList.add('hidden');
            }
        });
    </script>
</x-app-layout>