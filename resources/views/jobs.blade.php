<x-layout>
    <x-slot:heading>Jobs</x-slot>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="underline text-blue-600">
                    <strong>{{ $job['title'] }}</strong>
                    Pays:{{ $job['salary'] }} per year
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
