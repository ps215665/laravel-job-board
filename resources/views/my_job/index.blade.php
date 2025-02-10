<x-layout>
    <x-breadcrumbs :links="['My Jobs' => '#']" class="mb-4"/>

    <div class="mb-8 text-right">
        <x-link-button href="{{ route('my-jobs.create') }}">
            Add New
        </x-link-button>
    </div>
    @forelse($jobs as $job)
        <x-job-card :$job>
            <div class="flex space-x-2">
                <x-link-button href="{{route('my-jobs.edit', $job)}}">Edit</x-link-button>
            </div>
        </x-job-card>
    @empty
        No Jobs
    @endforelse
</x-layout>
