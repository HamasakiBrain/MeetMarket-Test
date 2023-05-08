<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-gray-900">
                <div class="sm:px-0 px-4">
                    <div class="sm:flex sm:items-center">
                        <div class="mt-4 sm:mt-0 sm:flex-none mr-4">
                            <a href="{{ route('dashboard') }}"  class="btn-back">Назад</a>
                        </div>
                        <div class="sm:flex-auto sm:mt-0 mt-4">
                            <h1 class="text-xl font-semibold text-gray-900">Редактирование продукта</h1>
                        </div>
                    </div>
                    <div class="mt-8 flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                <form action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                                        <div>
                                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                            <div class="relative">
                                                <input type="text" name="title" id="title" value="{{ $product->title }}" class="input pr-10 focus:outline-none @error('title') border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300">
                                                @error('title')
                                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                    <!-- Heroicon name: solid/exclamation-circle -->
                                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                @enderror
                                            </div>
                                            @error('title')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                                            <div class="relative">
                                                <input type="text" name="slug" id="slug" value="{{ $product->slug }}" class="input pr-10 focus:outline-none @error('slug') border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300">
                                                @error('slug')
                                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                    <!-- Heroicon name: solid/exclamation-circle -->
                                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                @enderror
                                            </div>
                                            @error('slug')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div>
                                            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                                            <div class="relative">
                                                <input type="number" name="price" id="price" value="{{ $product->price }}" class="input pr-10 focus:outline-none @error('price') border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300">
                                                @error('price')
                                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                    <!-- Heroicon name: solid/exclamation-circle -->
                                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                @enderror
                                            </div>
                                            @error('price')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="size" class="block text-sm font-medium text-gray-700">Size</label>
                                            <div class="relative">
                                                <input type="text" name="size" id="size" value="{{ $product->size }}" class="input pr-10 focus:outline-none @error('size') border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300">
                                                @error('size')
                                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                    <!-- Heroicon name: solid/exclamation-circle -->
                                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                @enderror
                                            </div>
                                            @error('size')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <label for="sku" class="block text-sm font-medium text-gray-700">SKU</label>
                                        <div class="relative">
                                            <input type="text" name="sku" id="sku" value="{{ $product->sku }}" class="input pr-10 focus:outline-none @error('sku') border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300">
                                            @error('sku')
                                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                <!-- Heroicon name: solid/exclamation-circle -->
                                                <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            @enderror
                                        </div>
                                        @error('sku')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 mt-4 gap-4">
                                        <div>
                                            <label for="brand_id" class="block text-sm font-medium text-gray-700">Choose brand</label>
                                            <div class="relative">
                                                <select id="brand_id" name="brand_id" class="input @error('brand_id') border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300">
                                                    <option value="" disabled selected>Select a brand</option>
                                                    @foreach($brands as $item)
                                                        <option value="{{ $item->id }}" @if($product->brand_id) selected @endif>{{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                                @error('brand_id')
                                                <div class="absolute z-[10] inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                    <!-- Heroicon name: solid/exclamation-circle -->
                                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                @enderror
                                            </div>
                                            @error('brand_id')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror

                                        </div>
                                        <div>
                                            <label for="category_id" class="block font-medium text-gray-700">Category</label>
                                            <div class="relative">
                                                <select id="category_id" name="category_id[]" multiple class="input @error('category_id') border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 h-[350px]">
                                                    <option value="" disabled selected>Select a category</option>

                                                    @foreach($category as $item)
                                                        <option value="{{ $item->id }}" @if(in_array($item->id, $categories)) selected @endif>{{ $item->id }}. {{ $item->title }}</option>
                                                        @foreach($item->children as $children)
                                                            <option value="{{ $children->id }}" class="pl-4" @if(in_array($item->id, $categories)) selected @endif>{{ $item->id }}.{{ $children->id }} {{ $children->title }}</option>
                                                        @endforeach
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                <div class="absolute z-[10] inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                    <!-- Heroicon name: solid/exclamation-circle -->
                                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                @enderror
                                            </div>
                                            @error('category_id')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror

                                        </div>
                                        <div class="sm:-mt-14 mt-0">
                                            <button type="submit" class="btn !w-full block">Create Product</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
