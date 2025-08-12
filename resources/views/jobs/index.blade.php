<x-layout>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        @forelse ($jobs as $job)
        <div> {{-- {{$job->title}} --}}
            <x-job-card :job="$job" />
        </div>
        @empty
        <p>No Job Available</p>
        @endforelse
    </div>

</x-layout>