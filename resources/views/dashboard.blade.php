<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="container mx-auto"> --}}
        <div class="flex">
            <div class="w-1/2">
                <div class="p-6">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <form method="POST" action="/oauth/clients">
                                @csrf

                                <!-- Name  -->
                                <div>
                                    <x-label for="name" :value="__('name')" />
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  placeholder="Client name" required autofocus />
                                </div>

                                <!-- url  -->
                                <div class="py-4">
                                    <x-label for="redirect" :value="__('Redirect Link')" />
                                    <x-input id="redirect" class="block mt-1 w-full" type="text" name="redirect" placeholder="https://facebook.com" required autofocus />
                                </div>


                                <div class="flex  justify-start">
                                    <x-button >
                                        {{ __('Create Client') }}
                                    </x-button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-1/2">
                {{-- mx-auto sm:px-6 lg:px-8 --}}
                <div class="p-6">
                    <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="bg-white p-6 border-b border-gray-200">
                            <h2>Clients</h2>
                            @foreach ($clients as $client)
                            <div class="bg-gradient-to-r from-yellow-100 to-yellow-100 p-2 my-4">
                                <div class="max-w-6 mx-auto">
                                  <h2 class="text tracking-tight text-gray-900 ">
                                    <span class="block"><b>ID: </b>{{ $client->id }}</span>
                                    <span class="block"><b>Name: </b>{{ $client->name }}</span>
                                    <span class="block"><b>Secret: </b>{{ $client->secret }}</span>
                                    <span class="block"><b>Provider: </b>
                                        @if($client->provider == null )
                                            Null
                                        @else
                                            {{ $client->provider }})
                                        @endif
                                    </span>
                                    <span class="block"><b>Redirect: </b>{{ $client->redirect }}</span>
                                    <span class="block"><b>Access: </b>{{ $client->personal_access_client }}</span>
                                    <span class="block"><b>CLient Password: </b>{{ $client->password_client }}</span>
                                    <span class="block"><b>Revoked: </b>{{ $client->revoked }}</span>
                                  </h2>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}

</x-app-layout>
