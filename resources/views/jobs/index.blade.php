<x-layout>
    <h1>A V Jobs</h1>
    <ul>
        @forelse ($jobs as $job)
            <li>{{ $loop->iteration }} - {{ $job }}</li>
        @empty
            <li>NO JOBS</li>
        @endforelse
    </ul>
</x-layout>
