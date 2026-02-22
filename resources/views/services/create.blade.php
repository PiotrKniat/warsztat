<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dodaj nową usługę
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <form method="POST" action="{{ route('services.store') }}">
                    @csrf <div class="mb-4">
                        <x-input-label for="name" value="Nazwa usługi" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="price" value="Cena (zł)" />
                        <x-text-input id="price" class="block mt-1 w-full" type="number" step="0.01" name="price" required />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="duration_minutes" value="Czas trwania (w minutach)" />
                        <x-text-input id="duration_minutes" class="block mt-1 w-full" type="number" name="duration_minutes" required />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="description" value="Opis (opcjonalnie)" />
                        <textarea id="description" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" name="description"></textarea>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button>
                            Zapisz usługę
                        </x-primary-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>