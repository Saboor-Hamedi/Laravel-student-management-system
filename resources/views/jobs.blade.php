<x-layout>
<x-slot:heading>
    Jobs
</x-slot:heading>
<ul>

    @foreach ( $jobs as $job)
    <li>
       <a href="/job-list/{{ $job['id'] }}"> {{ $job['title'] }}: Paid in a year {{ $job['salary'] }}</a>
    </li>
    @endforeach
</ul>
</x-layout>
