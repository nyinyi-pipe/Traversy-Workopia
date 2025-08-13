<x-layout>

    <h2 class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">Welcome To Workopedia</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 mb-6 gap-4">
        @forelse ( $jobs as $job )
        <x-job-card :job='$job' />
        @empty
        <p>No Job Available</p>
        @endforelse
    </div>

    <a href="{{route('jobs.index')}}" class="text text-xl text-center block">
        <i class="fa fa-arrow-alt-circle-right mr-1"></i> Show All Jobs
    </a>
    <x-bottom-banner></x-bottom-banner>

</x-layout>