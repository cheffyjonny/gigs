<x-layout>

    {{-- @include('partials._search') --}}

    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class="!p-10">
            <div class="">
                <img class="w-48 mr-6 mb-6 rounded-2xl"
                    src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}"
                    alt="" />

                <h3 class="text-3xl font-bold mb-2">{{ $listing->title }}</h3>
                <div class="text-xl  mb-4">{{ $listing->company }}</div>
                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                </div>
                <div class="text-lg my-4">
                    <i class="fa-solid fa-clipboard"></i> {{ $listing->tags }}
                </div>


                {{-- <ul class="flex">
                        <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                            <a href="#">Laravel</a>
                        </li>
                        <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                            <a href="#">API</a>
                        </li>
                        <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                            <a href="#">Backend</a>
                        </li>
                        <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                            <a href="#">Vue</a>
                        </li>
                    </ul> --}}


                <div class="flex items-center">
                    <a href="mailto:{{ $listing->email }}"
                        class="blocktext-white text-white py-2 px-4 rounded-xl bg-pink-400 hover:bg-pink-500"><i
                            class="fa-solid fa-envelope"></i>
                        Contact Employer</a>

                    <a href="{{ $listing->website }}" target="_blank"
                        class="block bg-black text-white py-2 px-4 rounded-xl hover:opacity-80 ml-5">
                        <i class="fa-solid fa-globe"></i> Visit Website</a>
                </div>
                {{-- <div class="border border-gray-200 w-full mb-6"></div> --}}
                <div class="mt-10">
                    <h3 class="text-3xl font-bold mb-4">
                        Job Description
                    </h3>
                    <div class="text-lg space-y-6">
                        {{ $listing->description }}
                    </div>

                </div>
            </div>
        </x-card>

        {{-- <x-card class="mt-4 p-2 flex space-x-6">
            <a href="/listings/{{$listing->id}}/edit">
                <i class="fa-solid fa-pencil"></i>Edit
            </a>

            <form method="POST" action="/listings/{{$listing->id}}">
                @csrf
                @method('delete')
                <button class="text-red-500">
                    <i class="fa-solid fa-trash"></i>Delete
                </button>
            </form>
        </x-card> --}}
    </div>

</x-layout>
