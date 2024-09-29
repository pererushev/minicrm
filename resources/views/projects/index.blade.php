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
                    <a href="{{ route('projects.create') }}" class="underline">Добавить проект</a>
                    <table class="min-w-full divide-y divide-gray-200 border mt-4">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">Название</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">Назначена на</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">Клиент</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">Дэдлайн</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500">Статус</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 divide-solid"> 
                            @foreach ($projects as $project)
                                <tr class="bg-white">
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-4">
                                        {{ $project->title }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-4">
                                        {{ $project->user->first_name }} {{ $project->user->last_name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-4">
                                        {{ $project->client->company_name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-4">
                                        {{ $project->deadline_at }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-4">
                                        {{ $project->status }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-4">
                                        <a href="{{ route('projects.edit', $project) }}" class="underline">Редактировать</a>
                                        |
                                        <form   
                                            action="{{ route('projects.destroy', $project) }}" 
                                            class="inline-block"
                                            method="post"
                                            onsubmit="return confirm('Ты что, правда хочешь это удалить?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="text-red-500 underline">Удалить</button>
                                        </form>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $projects->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>