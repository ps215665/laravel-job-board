<x-layout>
    <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index')]"/>

    <div class="flex flex-col md:flex-row gap-4">
        <!-- Filters Section -->
        <x-card class="mb-4 text-sm md:absolute md:left-0 md:top-0 py-11 md:h-full md:max-w-sm w-full" x-data="">
            <form x-ref="filters" id="filtering-form" action="{{route('jobs.index')}}" method="GET">
                <div class="mb-4 grid grid-cols-1 gap-4">
                    <div>
                        <div class="mb-1 font-semibold">Search</div>
                        <x-text-input name="search" value="{{request('search')}}" placeholder="Search for any text" form-ref="filters"></x-text-input>
                    </div>
                    <div>
                        <div class="mb-1 font-semibold">Salary</div>
                        <div class="flex space-x-2">
                            <x-text-input name="min_salary" value="{{request('min_salary')}}" placeholder="From" form-ref="filters"></x-text-input>
                            <x-text-input name="max_salary" value="{{request('max_salary')}}" placeholder="To" form-ref="filters"></x-text-input>
                        </div>
                    </div>
                    <div>
                        <div class="mb-1 font-semibold">Experience</div>
                        <x-radio-group name="experience" :options="\App\Models\Job::$experience"/>
                    </div>
                    <div>
                        <div class="mb-1 font-semibold">Category</div>
                        <x-radio-group name="category" :options="\App\Models\Job::$category"/>
                    </div>
                </div>
                <div class="w-full flex justify-center">
                    <x-button class="cursor-pointer">Filter</x-button>
                </div>
            </form>
        </x-card>

        <!-- Job Listings Section -->
        <div class="flex-1">
            @forelse($jobs as $job)
                <x-job-card class="text-orange-900" :$job>
                    <div class="mt-3">
                        <x-link-button :href="route('jobs.show', $job)">Show</x-link-button>
                    </div>
                </x-job-card>
            @empty
                <span class="top-10 py-10 text-red-900">No job found.</span>
            @endforelse

            <div>
                {!! $jobs->render() !!}
            </div>
        </div>
    </div>
</x-layout>
