<x-layout>
    @foreach( $jobs as $job )
        <x-job-card class="text-orange-900" :$job>
            <div class="mt-3 ">
                <x-link-button :href="route('jobs.show', $job)">Show</x-link-button>
            </div>
        </x-job-card>
    @endforeach
</x-layout>
