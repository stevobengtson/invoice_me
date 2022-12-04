<x-app-layout>
    <div class="flex justify-center">
        <ul role="list" class="bg-white rounded-lg border border-gray-200 w-96 text-gray-900">
        @foreach($projects as $project)
            <li class="px-6 py-2 border-b border-gray-200 w-full rounded-t-lg">
                {{ $project->name }}
            </li>
        @endforeach
        </ul>
    </div>
</x-app-layout>
