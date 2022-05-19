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
                        <div style="margin-top: 10px" class="row">
                            <input type="number" id="member" name="member" value="">Number of request fields: (max.
                            10)<br />
                            <a class=" items-center px-4 py-2 bg-gray-800 border border-transparent
                                rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
                                active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300
                                disabled:opacity-25 transition ease-in-out duration-150 ml-4"
                                style="margin:10px; " id="filldetails" onclick="addFields()">
                                {{ __(' + Field') }}
                            </a>

                        </div>
                        <div id="container"></div>

                        <!-- Name -->
                        {{-- <div>
                            <x-label for="write_form" :value="__('Write_form')" />
                            <textarea name="write_form" id="" cols="30" rows="3"></textarea>
                        </div>
                        <!-- Name -->
                        <div>
                            <x-label for="pdf" :value="__('PDF documrnt')" />
                            <input type="file" name="pdf" id="">
                        </div> --}}

                        <x-button class="ml-4">
                            {{ __('Confirm') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript'>
        function addFields() {
            // Generate a dynamic number of inputs
            var number = document.getElementById("member").value;
            // Get the element where the inputs will be added to
            var container = document.getElementById("container");
            // Remove every children it had before
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            for (i = 0; i < number; i++) {
                // Append a node with a random text
                container.appendChild(document.createTextNode("Request field " + (i + 1)));
                // Create an <input> element, set its type and name attributes
                var input = document.createElement("input");
                input.type = "text";
                input.name = "fields[]";
                container.appendChild(input);
                // Append a line break 
                container.appendChild(document.createElement("br"));
            }
        }
    </script>
</x-app-layout>
