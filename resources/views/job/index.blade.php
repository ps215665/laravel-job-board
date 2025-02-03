<x-layout>
    @foreach( $jobs as $job )
        <div class="mb-4 rounded-md border-spacing-1 border-gray-300 p-4">{{$job->title}}</div>
    @endforeach

</x-layout>
