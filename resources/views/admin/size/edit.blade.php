@extends('layouts.admin')

@section('content')
    <div class="container mx-auto">

        <label for="code" class="block text-sm font-medium text-gray-700">Code</label>
        <div class="relative mt-1 rounded-md shadow-sm">
            <input type="text" name="code" id="code" class="block w-full rounded-md border-red-300 pr-10 text-red-900 placeholder-red-300 focus:border-red-500 focus:outline-none focus:ring-red-500 sm:text-sm" placeholder="S" aria-invalid="true" aria-describedby="code-error">
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                <!-- Heroicon name: mini/exclamation-circle -->
                <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
        <p class="mt-2 text-sm text-red-600" id="code-error">Le code est obligatoire.</p>

        <label for="code" class="block text-sm font-medium text-gray-700">Libelle</label>
        <div class="relative mt-1 rounded-md shadow-sm">
            <input type="text" name="code" id="libelle" class="block w-full rounded-md border-red-300 pr-10 text-red-900 placeholder-red-300 focus:border-red-500 focus:outline-none focus:ring-red-500 sm:text-sm" placeholder="Small" aria-invalid="true" aria-describedby="libelle-error">
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                <!-- Heroicon name: mini/exclamation-circle -->
                <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
        <p class="mt-2 text-sm text-red-600" id="libelle-error">Le libelle est obligatoire.</p>
        <label for="stock" class="block text-sm font-medium text-gray-700">Stock</label>
        <div class="relative mt-1 rounded-md shadow-sm">
            <input type="number" name="code" id="stock" class="block w-full rounded-md border-red-300 pr-10 text-red-900 placeholder-red-300 focus:border-red-500 focus:outline-none focus:ring-red-500 sm:text-sm" placeholder="Stock" aria-invalid="true" aria-describedby="stock-error">
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                <!-- Heroicon name: mini/exclamation-circle -->
                <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
        <p class="mt-2 text-sm text-red-600" id="stock-error">Le stock doit être > 0.</p>
        <div class="pt-5">
            <div class="flex justify-end">
                <button type="button" class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Annuler</button>
                <button type="submit" class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Sauvegarder</button>
            </div>
        </div>
    </div>
@endsection
