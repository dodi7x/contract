<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Documents') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('document.store') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Name')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                required autofocus />
                        </div>
                        <!-- Name -->
                        <div>
                            <x-label for="write_form" :value="__('Write_form')" />
                            <textarea name="write_form" id="" cols="30" rows="10"></textarea>
                        </div>
                        <!-- Name -->
                        <div>
                            <x-label for="pdf" :value="__('PDF documrnt')" />
                            <input type="file" name="pdf" id="">
                        </div>
                        <x-button class="ml-4">
                            {{ __('Confirm') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
