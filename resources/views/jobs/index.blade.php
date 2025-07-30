<x-layout>
    <h1> Available Jobs</h1>
    <ul>
        @forelse ($jobs as $job)

        {{-- <li>{{ $loop->iteration}}. {{$job['title'] }} - {{$job['description']}} --}}
        <li>{{$job->title }} - {{$job->description}}
            @empty
        <li>NO JOBS</li>
        @endforelse
    </ul>
</x-layout>