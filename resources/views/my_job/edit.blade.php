<x-layout>
    <x-breadcrumbs :links="['My Jobs' => route('my-jobs.index'), 'Edit Job' => '#']" class="mb-4"/>

    <x-card class="mb-8">
        <form action="{{ route('my-jobs.update', $job) }}" method="POST">
            @csrf
            @method('PUT')
{{--            @php--}}
{{--            dd($job)--}}
{{--            @endphp--}}
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <label for="title">Job Title</label>
                    <x-text-input name="title" value="{{ $job->title }}"/>
                </div>
                <div>
                    <label for="location">Location</label>
                    <x-text-input name="location" value="{{ $job->location }}"/>
                </div>
                <div class="col-span-2">
                    <label for="salary">Salary</label>
                    <x-text-input name="salary" type="number" value="{{ $job->salary }}" />
                </div>
                <div class="col-span-2">
                    <label for="description">Description</label>
                    <textarea name="description" class="bg-white w-full rounded-md border-0 py-1.5 px-2.5 pr-8 text-sm ring-1 ring-slate-300 placeholder:text-slate-400 focus:ring-2">
                        {{ e($job->description) }}
                    </textarea>
                </div>
                <div>
                    <label for="experience">Experience</label>
                    <x-radio-group name="experience" :selectedOption="$job->experience" :options="\App\Models\Job::$experience" :allOption="false"/>
                </div>
                <div>
                    <label for="category">Category</label>
                    <x-radio-group name="category" :selectedOption="$job->category" :options="\App\Models\Job::$category" :allOption="false" />
                </div>
                <div class="col-span-2">
                    <x-button class="w-full">Edit Job</x-button>
                </div>
            </div>
        </form>
    </x-card>
</x-layout>
