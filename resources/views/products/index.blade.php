<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Продукты') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-gray-900">
                <div class="">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-xl font-semibold text-gray-900">Продукты</h1>
                        </div>
                        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                            <a href="{{ route('products.create') }}"  class="btn">Создать</a>
                        </div>
                    </div>
                    <div class="mt-8 flex flex-col">
                        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                    <table class="table">
                                        <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="table-th-first">ID</th>
                                            <th scope="col" class="table-th">Title</th>
                                            <th scope="col" class="table-th">SKU</th>
                                            <th scope="col" class="table-th">Brand</th>
                                            <th scope="col" class="table-th">Price</th>
                                            <th scope="col" class="table-th-edit">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 bg-white">
                                        @forelse($products as $item)
                                            <tr>
                                                <td class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-gray-500 sm:pl-6">AAPS0L</td>
                                                <td class="table-td">Title</td>
                                                <td class="table-td">SKU</td>
                                                <td class="table-td">Brand</td>
                                                <td class="table-td">Price</td>
                                                <td class="relative whitespace-nowrap py-2 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                    <a href="{{ route('products.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-2">Редактировать<span class="sr-only">, AAPS0L</span></a>
                                                    <a href="#" class="text-red-600 hover:text-indigo-900">Удалить<span class="sr-only">, AAPS0L</span></a>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="6" class="table-td text-center">Нет продуктов</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
