@extends('layouts/app')

@section('content')
    <div class="bg-white">
        <div class="pt-6 pb-16 sm:pb-24">
            <nav aria-label="Breadcrumb" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <ol role="list" class="flex items-center space-x-4">
                    <li class="text-sm">
                        <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">Tee-Shirt</a>
                    </li>
                </ol>
            </nav>
            <div class="mx-auto mt-8 max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="lg:grid lg:auto-rows-min lg:grid-cols-12 lg:gap-x-8">
                    <div class="lg:col-span-5 lg:col-start-8">
                        <div class="flex justify-between">
                            <h1 class="text-xl font-medium text-gray-900">Tee-shirt Basique</h1>
                            <p class="text-xl font-medium text-gray-900">35 €</p>
                        </div>
                        <!-- Reviews -->
                        <div class="mt-4">
                            <h2 class="sr-only">Critiques</h2>
                            <div class="flex items-center">
                                <p class="text-sm text-gray-700">
                                    3.9
                                    <span class="sr-only"> sur 5</span>
                                </p>
                                <div aria-hidden="true" class="ml-4 text-sm text-gray-300">·</div>
                                <div class="ml-4 flex">
                                    <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Voir les 512 critiques</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Image gallery -->
                    <div class="mt-8 lg:col-span-7 lg:col-start-1 lg:row-span-3 lg:row-start-1 lg:mt-0">
                        <h2 class="sr-only">Images</h2>

                        <div class="grid grid-cols-1 lg:grid-cols-2 lg:grid-rows-3 lg:gap-8">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-featured-product-shot.jpg" alt="Back of women&#039;s Basic Tee in black." class="lg:col-span-2 lg:row-span-2 rounded-lg">

                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-product-shot-01.jpg" alt="Side profile of women&#039;s Basic Tee in black." class="hidden lg:block rounded-lg">

                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-product-shot-02.jpg" alt="Front of women&#039;s Basic Tee in black." class="hidden lg:block rounded-lg">
                        </div>
                    </div>

                    <div class="mt-8 lg:col-span-5">
                        <form><!-- Size picker -->
                            <div class="mt-8">
                                <div class="flex items-center justify-between">
                                    <h2 class="text-sm font-medium text-gray-900">Taille</h2>
                                </div>

                                <fieldset class="mt-2">
                                    <legend class="sr-only">Choisir une taille</legend>
                                    <div class="grid grid-cols-3 gap-3 sm:grid-cols-6">
                                        <label class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none">
                                            <input type="radio" name="size-choice" value="XXS" class="sr-only" aria-labelledby="size-choice-0-label">
                                            <span id="size-choice-0-label">XXS</span>
                                        </label>
                                        <label class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none">
                                            <input type="radio" name="size-choice" value="XS" class="sr-only" aria-labelledby="size-choice-1-label">
                                            <span id="size-choice-1-label">XS</span>
                                        </label>
                                        <label class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none">
                                            <input type="radio" name="size-choice" value="S" class="sr-only" aria-labelledby="size-choice-2-label">
                                            <span id="size-choice-2-label">S</span>
                                        </label>
                                        <label class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none">
                                            <input type="radio" name="size-choice" value="M" class="sr-only" aria-labelledby="size-choice-3-label">
                                            <span id="size-choice-3-label">M</span>
                                        </label>
                                        <label class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none">
                                            <input type="radio" name="size-choice" value="L" class="sr-only" aria-labelledby="size-choice-4-label">
                                            <span id="size-choice-4-label">L</span>
                                        </label>
                                        <label class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 opacity-25 cursor-not-allowed">
                                            <input type="radio" name="size-choice" value="XL" disabled class="sr-only" aria-labelledby="size-choice-5-label">
                                            <span id="size-choice-5-label">XL</span>
                                        </label>
                                    </div>
                                </fieldset>
                            </div>

                            <button type="submit" class="mt-8 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 py-3 px-8 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Ajouter au panier</button>
                        </form>

                        <!-- Product details -->
                        <div class="mt-10">
                            <h2 class="text-sm font-medium text-gray-900">Description</h2>

                            <div class="prose prose-sm mt-4 text-gray-500">
                                <p>Le tee-shirt Basic est une nouvelle version honnête d'un classique. Ce tee-shirt est en coton super doux et pré-rétréci pour un vrai confort et une coupe fiable. Ils sont coupés et cousus à la main localement, avec une technique de teinture spéciale qui donne à chaque t-shirt son propre aspect.</p>
                                <p>Vous cherchez à garnir votre garde-robe ? Le tee-shirt Basic est également disponible en pack de 3 ou 5 pièces avec une remise groupée.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
