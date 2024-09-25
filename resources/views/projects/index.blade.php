<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Проекты') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('clients.create') }}" class="underline">Добавить клиента</a>
                    <table class="min-w-full divide-y divide-gray-200 border mt-4">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">Компания</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">ИНН</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">Адрес</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 divide-solid"> 
                            @foreach ($clients as $client)
                                <tr class="bg-white">
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-4">
                                        {{ $client->company_name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-4">
                                        {{ $client->company_vat }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-4">
                                        {{ $client->contact_email }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-4">
                                        <a href="{{ route('clients.edit', $client) }}" class="underline">Edit</a>
                                        |
                                        <form   
                                            action="{{ route('clients.destroy', $client) }}" 
                                            class="inline-block"
                                            method="post"
                                            onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="text-red-500 underline">Delete</button>
                                        </form>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $clients->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>