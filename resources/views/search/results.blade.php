<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <div
        class="mx-auto lg:w-3/4 md:w-4/5 sm:w-3/4 p-4 bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
        @foreach ($results as $result)
            <img class="object-contain h-40 w-full bg-indigo-300"
                src="{{ asset('storage/img/global-islamic-school.png') }}" alt="Sunset in the mountains">
            <div class="px-3 py-2">
                <div class="font-bold text-xl mb-2 text-center">
                    {{-- {{ ucfirst($results->employee->name ?? '') }} --}}
                </div>
                {{-- <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">We invest in the world’s potential</h1> --}}

                <h1 class="mb-4 sm:text-2xl md:text-3xl lg:text-4xl ">{{ $result->title }}</h1>
                <p class="text-gray-700 text-base">
                    {{ $result->body_text }}
                </p>
                <p class="text-center text-zinc-100">{{ $result->salary }}</p>
                <div class="flex-auto flex flex-wrap justify-center lg:justify-center text-center px-3 py-2">
                    @foreach ($result->tags as $tag)
                        <span
                            class="inline-block bg-gray-200 rounded-lg px-3 py-1 text-xs md:text-xs lg:text-xs hover:text-blue-400 hover:bg-gray-300 cursor-pointer text-gray-700 mr-2 mb-1">
                            #{{ $tag->name }}
                        </span>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    {{-- side bar --}}

</x-layout>
