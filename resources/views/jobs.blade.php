<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20 bg-white">

        <div class="container mx-auto">
            <div class="flex flex-wrap justify-center -mx-4">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[510px] text-center lg:mb-20">
                        <span class="block mb-2 text-lg font-semibold text-primary">
                            Our Blogs
                        </span>
                        <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px] dark:text-white">
                            Our Recent News
                        </h2>
                        <p class="text-base text-body-color dark:text-dark-6">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>

            </div>
            {{-- load data --}}
            <div class="flex flex-wrap sm:flex rounded-md p-2">
                @if (Session::has('success'))
                    <div class="w-full bg-green-800 text-center rounded-md text-white">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                @endif
                @if (count($jobs) > 0)
                    @foreach ($jobs as $job)
                        <div class="w-full p-2 md:w-1/2 lg:w-1/3 p-10 rounded-md">
                            <div class="w-full bg-white-400 rounded-md shadow-lg">
                                <div>
                                    <img src="https://cdn.tailgrids.com/2.0/image/application/images/blogs/blog-01/image-01.jpg"
                                        alt="image" class="w-full" />
                                </div>
                                <span class="w-full p-2 rounded-md text-xs text-slate-400 text-center">
                                    {{ $job->employee->name }}
                                </span>
                                <div class="p-4">
                                    <h3 class="text-center text-xl">
                                        {{ $job->title }}
                                    </h3>
                                        <p class="text-base">
                                            {{ Str::limit($job->body_text, 40) }}
                                        </p>
                                    <div class="w-full rounded-md text-xs text-slate-400 text-center">
                                        {{ $job->created_at }}
                                    </div>
                                    <div
                                        class="flex-auto flex flex-wrap justify-center lg:justify-center text-center px-3 py-2">
                                        @foreach ($job->tags as $tag)
                                            <span
                                                class="inline-block bg-gray-200 rounded-lg px-3 py-1 text-xs md:text-xs lg:text-xs hover:text-blue-400 hover:bg-gray-300 cursor-pointer text-gray-700 mr-2 mb-1">
                                                #{{ $tag->name }}
                                            </span>
                                        @endforeach
                                    </div>

                                </div>
                                <a href="{{ route('show', $job->slug) }}"
                                    class="w-full inline-block text-center bg-blue-300 rounded-md px-2 text-gray-800 hover:text-blue-500 transition-colors duration-300">
                                    Details
                                </a>
                            </div>
                        </div>
                    @endforeach
                    {{-- pagination --}}
                    <div
                        class="w-full bg-white p-2 border rounded-md border-stroke dark:bg-dark-2 dark:border-dark-2 shadow-lg">
                        <ul class="-mx-[6px]">
                            <li class="px-[6px]">
                                {{ $jobs->links() }}
                            </li>
                        </ul>
                    </div>
                @else
                    <p>No Data Found</p>
                @endif
            </div>
    </section>
    </div>
    {{-- end of pagination --}}
</x-layout>
