<x-layout>
    <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index'), $job->title => '#']"/>
    <x-job-card :$job>
        <p class="text-sm text-slate-500">
            {!! nl2br(e($job->description)) !!}
        </p>

        @can('apply', $job)
            <div class="mt-2">
                <x-link-button :href="route('job.application.create', $job)">Apply</x-link-button>
            </div>
            @else
            <div class="text-center text-sm font-medium text-slate-500 text-xl text-blue-500 mt-3">{{ auth()->user() ? "You've already applied to this job." : "Login to Apply for this Job" }}</div>
        @endcan
    </x-job-card>

    <x-card class="mb-4">
        <h2 class="mb-4 text-lg font-medium">Other Jobs from <span class="underline text-slate-500">{{ $job->employer->company_name }}</span></h2>
        <div class="text-sm text-slate-500">
            @foreach ($job->employer->jobs as $otherJob)
                <div class="mb-4 flex justify-between">
                    <div>
                        <div class="text-slate-700">
                            <a href="{{ route('jobs.show', $otherJob) }}">
                                {{ $otherJob->title }}
                            </a>
                        </div>
                        <div class="text-xs">
                            {{ $otherJob->created_at->diffForHumans() }}
                        </div>
                    </div>
                    <div class="text-xs">
                        ${{ number_format($otherJob->salary) }}
                    </div>
                </div>
            @endforeach
        </div>
    </x-card>
</x-layout>
