<x-layouts.layout>
    <div class="min-h-screen bg-gray-100 py-12 px-4 sm:px-6 lg:px-8 pb-32">
        <div class="max-w-2xl mx-auto">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ __('messages.edit') }} {{ __('messages.student') }}</h1>
                <p class="text-gray-600">{{ __('messages.update_student_info') }}</p>
            </div>

            <!-- Form Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <form method="POST" action="{{ route('alumnos.update', $alumno) }}" class="p-8">
                    @csrf
                    @method('PUT')

                    <!-- First Name -->
                    <div class="mb-6">
                        <x-input-label for="nombre" :value="__('messages.first_name')" class="text-gray-700 font-semibold mb-2" />
                        <x-text-input 
                            id="nombre" 
                            class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition" 
                            type="text" 
                            name="nombre" 
                            :value="old('nombre', $alumno->nombre)" 
                            required 
                            autofocus 
                            placeholder="Juan"
                        />
                        <x-input-error :messages="$errors->get('nombre')" class="mt-2 text-red-600" />
                    </div>

                    <!-- Last Name -->
                    <div class="mb-6">
                        <x-input-label for="apellidos" :value="__('messages.last_name')" class="text-gray-700 font-semibold mb-2" />
                        <x-text-input 
                            id="apellidos" 
                            class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition" 
                            type="text" 
                            name="apellidos" 
                            :value="old('apellidos', $alumno->apellidos)" 
                            required 
                            placeholder="Pérez García"
                        />
                        <x-input-error :messages="$errors->get('apellidos')" class="mt-2 text-red-600" />
                    </div>

                    <!-- Email -->
                    <div class="mb-6">
                        <x-input-label for="email" :value="__('messages.email')" class="text-gray-700 font-semibold mb-2" />
                        <x-text-input 
                            id="email" 
                            class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition" 
                            type="email" 
                            name="email" 
                            :value="old('email', $alumno->email)" 
                            required 
                            placeholder="juan@example.com"
                        />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
                    </div>

                    <!-- Birth Date -->
                    <div class="mb-6">
                        <x-input-label for="fecha_nacimiento" :value="__('messages.birth_date')" class="text-gray-700 font-semibold mb-2" />
                        <x-text-input 
                            id="fecha_nacimiento" 
                            class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition" 
                            type="date" 
                            name="fecha_nacimiento" 
                            :value="old('fecha_nacimiento', $alumno->fecha_nacimiento)" 
                            required 
                        />
                        <x-input-error :messages="$errors->get('fecha_nacimiento')" class="mt-2 text-red-600" />
                    </div>

                    <!-- Buttons -->
                    <div class="flex items-center justify-between mt-8 pt-6 border-t border-gray-200">
                        <a href="{{ route('alumnos.index') }}" class="inline-flex items-center px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition font-medium">
                            {{ __('messages.cancel') }}
                        </a>
                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-lg transition duration-200">
                            {{ __('messages.update') }}
                        </button>
                    </div>
                </form>
            </div>

            <!-- Back Link -->
            <div class="mt-6 text-center">
                <a href="{{ route('alumnos.index') }}" class="text-blue-600 hover:text-blue-800 font-semibold">
                    ← {{ __('messages.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</x-layouts.layout>
