<x-layout>
    <h1> Available Jobs</h1>
    <ul>
        @forelse ($jobs as $job)

        {{-- <li>{{ $loop->iteration}}. {{$job['title'] }} - {{$job['description']}} --}}
        <li><a href="{{route('jobs.show',$job->id)}}">{{$job->title }}
            </a> - {{$job->description}} </li>
        @empty
        <li>NO JOBS</li>
        @endforelse
    </ul>
</x-layout>