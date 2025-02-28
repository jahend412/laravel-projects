@extends('layouts.app')

@section('title', 'All Tasks')

@section('header', 'My Tasks')

@section('content')
    <div class="mb-4 flex justify-between items-center">
        <p class="text-gray-600">Your task list</p>
        <a href="{{ route('tasks.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Add New Task
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow overflow-hidden rounded-lg">
        @if (count($tasks) > 0)
            <ul class="divide-y divide-gray-200">
                @foreach ($tasks as $task)
                    <li class="px-6 py-4 flex items-center justify-between">
                        <div class="flex items-center">
                            <span class="text-sm font-medium text-gray-900 {{ $task->completed ? 'line-through text-gray-500' : '' }}">
                                {{ $task->title }}
                            </span>
                        </div>
                        <div class="flex space-x-2">
                            <a href="{{ route('tasks.show', $task) }}" class="text-blue-600 hover:text-blue-900">View</a>
                            <a href="{{ route('tasks.edit', $task) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        @else
            <div class="px-6 py-4 text-center text-gray-500">
                No tasks yet. Create your first task!
            </div>
        @endif
    </div>
@endsection