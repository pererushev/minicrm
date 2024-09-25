<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Добавить клиента') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('clients.store') }}">
                        @csrf
                        
                        <h3 class="text-xl font-semibold mb-4">Контактное лицо</h3>

                        <!-- Имя контакта -->
                        <div>
                            <x-input-label for="contact_name" :value="__('Имя')" />
                            <x-text-input id="contact_name" class="block mt-1 w-full" type="text" name="contact_name" :value="old('contact_name')" required autofocus autocomplete="contact_name" />
                            <x-input-error :messages="$errors->get('contact_name')" class="mt-2" />
                        </div>
                
                        <!-- Email контакта -->
                        <div class="mt-4">
                            <x-input-label for="contact_email" :value="__('Email')" />
                            <x-text-input id="contact_email" class="block mt-1 w-full" type="email" name="contact_email" :value="old('contact_email')" required autofocus autocomplete="contact_email" />
                            <x-input-error :messages="$errors->get('contact_email')" class="mt-2" />
                        </div>
                
                        <!-- Номер контакта -->
                        <div class="mt-4">
                            <x-input-label for="contact_phone_number" :value="__('Телефон')" />
                            <x-text-input id="contact_phone_number" class="block mt-1 w-full" type="text" name="contact_phone_number" :value="old('contact_phone_number')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('contact_phone_number')" class="mt-2" />
                        </div>

                        <h3 class="text-xl font-semibold mb-4 mt-4">Компания</h3>
                
                        <!-- Название компании -->
                        <div class="mt-4">
                            <x-input-label for="company_name" :value="__('Название')" />
                
                            <x-text-input id="company_name" class="block mt-1 w-full"
                                            type="text"
                                            name="company_name"
                                            required autocomplete="company_name" />
                
                            <x-input-error :messages="$errors->get('company_name')" class="mt-2" />
                        </div>

                        <!-- Адрес компании -->
                        <div class="mt-4">
                            <x-input-label for="company_address" :value="__('Адрес')" />
                
                            <x-text-input id="company_address" class="block mt-1 w-full"
                                            type="text"
                                            name="company_address"
                                            required autocomplete="company_address" />
                
                            <x-input-error :messages="$errors->get('company_address')" class="mt-2" />
                        </div>

                        <!-- Город -->
                        <div class="mt-4">
                            <x-input-label for="company_city" :value="__('Город')" />
                
                            <x-text-input id="company_city" class="block mt-1 w-full"
                                            type="text"
                                            name="company_city"
                                            required autocomplete="company_city" />
                
                            <x-input-error :messages="$errors->get('company_city')" class="mt-2" />
                        </div>

                        <!-- Индекс -->
                        <div class="mt-4">
                            <x-input-label for="company_zip" :value="__('Индекс')" />
                
                            <x-text-input id="company_zip" class="block mt-1 w-full"
                                            type="text"
                                            name="company_zip"
                                            required autocomplete="company_zip" />
                
                            <x-input-error :messages="$errors->get('company_zip')" class="mt-2" />
                        </div>

                        <!-- ИНН -->
                        <div class="mt-4">
                            <x-input-label for="company_vat" :value="__('ИНН')" />
                
                            <x-text-input id="company_vat" class="block mt-1 w-full"
                                            type="text"
                                            name="company_vat"
                                            required autocomplete="company_vat" />
                
                            <x-input-error :messages="$errors->get('company_vat')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-primary-button class="mt-4">
                                {{ __('Save') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>