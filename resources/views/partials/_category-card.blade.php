<a href="{{ route('category_show', ['category' => $category->slug]) }}"
   class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
              <span aria-hidden="true" class="absolute inset-0">
                <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-01.jpg" alt=""
                     class="h-full w-full object-cover object-center">
              </span>
    <span aria-hidden="true"
          class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
    <span
        class="relative mt-auto text-center text-xl font-bold text-white">{{ $category->libelle }}</span>
</a>
