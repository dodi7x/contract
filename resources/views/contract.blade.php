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
                    <form method="Post" action="{{ route('document.select') }}">
                        @csrf
                        <select name="document_id" id="" onchange="this.form.submit()">
                            @foreach ($documents as $document)
                            <option value="">Please select</option>
                                <option value="{{ $document->id }}">{{ $document->name }}</option>
                            @endforeach
                        </select>


                    </form>
                    @if (session('document_fields'))
                        @foreach (session('document_fields') as $item)
                           
                        <div>
                            <label for="">{{ $item->field }}</label>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                required autofocus />
                        </div>
                     
                        
                        @endforeach
                    @endif
                    <x-button class="ml-4">
                        {{ __('Confirm') }}
                    </x-button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            /* When click show user */
            $('body').on('click', '#show-user', function() {
                var user_id = $(this).data('id');
                $.get('ajax-crud/' + user_id + '/edit', function(data) {
                    $('#userShowModal').html("User Details");
                    $('#ajax-modal').modal('show');
                    $('#user_id').val(data.id);
                    $('#name').val(data.name);
                    $('#email').val(data.email);
                })
            });

        });
    </script>
</x-app-layout>
