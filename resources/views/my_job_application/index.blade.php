<x-layout>
    <x-breadcrumbs @class="mb-4"
    :links="['My Job Applications' => '#']" />

    @forelse($applications as $application)
        <x-job-card :job="$application->job">
            <div class="flex items-center justify-between text-xs text-slate-500">
                <div class="space-y-1.5">
                    <div>
                        Applied {{ $application->created_at->diffForHumans() }}
                    </div>
                    <div>
                        Other {{Str::plural('applicant', $application->job->job_applications - 1)}} {{ $application->job->job_applications ?? 0 }}
                    </div>
                    <div>
                        Your Expected Salary {{ number_format($application->expected_salary) }}
                    </div>
                    <div>
                        Average Expected Salary {{ number_format($application->job->job_applications_avg_expected_salary) }}
                    </div>
                </div>
                <div>
                    <form method="POST" action="{{route('my-job-applications.destroy', $application)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-gray-600 py-2 px-2 text-white rounded-md font-medium hover:bg-gray-700 cursor-pointer">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </x-job-card>
        @empty
        <div class="mt-5 p-5 font-medium rounded-md text-center bg-white border-1 border-dashed">No Applications Found.</div>
    @endforelse
</x-layout>
