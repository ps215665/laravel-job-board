<x-layout>
    <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index'), $job->title => route('jobs.show', $job), 'Apply' => '#']"/>

    <x-job-card :$job />
    <x-card>
        <h2 class="mb-4 text-lg font-medium">
            <span class="text-slate-700">Your Job Application</span>
        </h2>
        <form action="{{ route('job.application.store', $job) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="expected_salary" class="mb-1">Expected Salary</label>
                <x-text-input type="number" name="expected_salary" form-ref="application" />
            </div>

            <div class="mb-4">
                <label for="expected_salary" class="mb-1">Upload CV</label>
                <x-text-input type="file" name="cv" form-ref="application" />
            </div>

            <x-button class="w-full cursor-pointer">Apply</x-button>
        </form>
    </x-card>
</x-layout>
