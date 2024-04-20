<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <div class="container mx-auto  p-2 rounded-md  lg:w-4/5 sm:w-5/4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($jobs as $job)
                <div class="flex justify-center">
                    <div class="w-full md:max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="object-contain h-40 w-full bg-indigo-300"
                            src="{{ asset('storage/img/global-islamic-school.png') }}" alt="Sunset in the mountains">
                        <div class="px-3 py-2">
                            <div class="font-bold text-xl mb-2 text-center">The Coldest Sunset</div>
                            <p class="text-gray-700 text-base text-center ">
                                <a href="{{ route('show', $job->slug) }}">{{ $job->title }}</a>
                            </p>
                            <p class="text-center text-zinc-100">{{ $job->salary }}</p>
                        </div>
                        <div class="flex-auto flex flex-wrap justify-center lg:justify-center text-center px-3 py-2">
                            <span class="inline-block bg-gray-200 rounded-lg px-3 py-1 text-xs md:text-xs lg:text-xs hover:text-blue-400 hover:bg-gray-300 cursor-pointer text-gray-700 mr-2 mb-1">#photography</span>
                            <span class="inline-block bg-gray-200 rounded-lg px-3 py-1 text-xs md:text-xs lg:text-xs hover:text-blue-400 hover:bg-gray-300 cursor-pointer text-gray-700 mr-2 mb-1">#travel</span>
                            <span class="inline-block bg-gray-200 rounded-lg px-3 py-1 text-xs md:text-xs lg:text-xs hover:text-blue-400 hover:bg-gray-300 cursor-pointer text-gray-700">#winter</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

</x-layout>
