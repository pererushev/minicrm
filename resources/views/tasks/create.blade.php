<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Добавить задачу') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('tasks.store') }}">
                        @csrf
                
                        <!-- Название -->
                        <div>
                            <x-input-label for="title" :value="__('Название')" />
                            <x-text-input 
                                    id="title" 
                                    class="block mt-1 w-full" 
                                    type="text" 
                                    name="title" 
                                    :value="old('title')" required autofocus autocomplete="title" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>
                
                        <!-- Описание задачи -->
                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Описание задачи')" />
                            <x-text-input 
                                    id="description" 
                                    class="block mt-1 w-full" 
                                    type="text" 
                                    name="description" 
                                    :value="old('description')" required autofocus autocomplete="description" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                
                        <!-- Deadline -->
                        <div class="mt-4">
                            <x-input-label for="deadline_at" :value="__('Дэдлайн')" />
                            <x-text-input 
                                    id="deadline_at" 
                                    class="block mt-1 w-full" 
                                    type="date" 
                                    name="deadline_at" 
                                    :value="old('deadline_at')" required autocomplete="deadline_at" />
                            <x-input-error :messages="$errors->get('deadline_at')" class="mt-2" />
                        </div>
                
                        <!-- Ответственный -->
                        <div class="mt-4">
                            <x-input-label for="user_id" :value="__('Ответственный')" />
                
                                <select class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md" name="user_id" id="user_id">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"
                                            @selected(old('user_id') == $user->id)>{{ $user->first_name . ' ' . $user->last_name}}
                                        </option>
                                    @endforeach
                                </select>
                            <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
                        </div>

                        <!-- Клиент -->
                        <div class="mt-4">
                            <x-input-label for="client_id" :value="__('Клиент')" />
                
                                <select class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md" name="client_id" id="client_id">
                                    @foreach ($clients as $client)
                                        <option value="{{ $client->id }}"
                                            @selected(old('client_id') == $client->id)>{{ $client->company_name}}
                                        </option>
                                    @endforeach
                                </select>
                            <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
                        </div>

                        <!-- Проект -->
                        <div class="mt-4">
                            <x-input-label for="project_id" :value="__('Проект')" />
                
                                <select class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md" name="project_id" id="project_id">
                                    @foreach ($projects as $project)
                                        <option value="{{ $project->id }}"
                                            @selected(old('project_id') == $project->id)>{{ $project->title}}
                                        </option>
                                    @endforeach
                                </select>
                            <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
                        </div>
                
                        <!-- Статус -->
                        <div class="mt-4">
                            <x-input-label for="status" :value="__('Статус')" />
                                <select class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md" name="status" id="status">
                                    @foreach (\App\TaskStatus::cases() as $status)
                                        <option value="{{ $status->value }}"
                                            @selected(old('status') == $status->value)>{{ $status->value}}
                                        </option>
                                    @endforeach
                                </select>
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                            
                        </div>
                
                        <div class="mt-4">
                            <x-primary-button class="mt-4">
                                {{ __('Сохранить') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>