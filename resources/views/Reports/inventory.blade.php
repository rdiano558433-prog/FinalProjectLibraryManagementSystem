@extends('layouts.app')

@section('title', 'Inventory Report')
@section('page-title', 'Inventory Report')

@section('content')
<div class="p-6 space-y-6">

    {{-- Summary Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">

        <div class="bg-white p-4 rounded-lg shadow border">
            <p class="text-gray-500 text-sm">Total Books</p>
            <h2 class="text-xl font-bold">{{ $summary['total_titles'] }}</h2>
        </div>

        <div class="bg-white p-4 rounded-lg shadow border">
            <p class="text-gray-500 text-sm">Total Copies</p>
            <h2 class="text-xl font-bold">{{ $summary['total_copies'] }}</h2>
        </div>

        <div class="bg-white p-4 rounded-lg shadow border">
            <p class="text-gray-500 text-sm">Available Copies</p>
            <h2 class="text-xl font-bold text-green-600">
                {{ $summary['available_copies'] }}
            </h2>
        </div>

        <div class="bg-white p-4 rounded-lg shadow border">
            <p class="text-gray-500 text-sm">Borrowed Copies</p>
            <h2 class="text-xl font-bold text-red-600">
                {{ $summary['borrowed_copies'] }}
            </h2>
        </div>

    </div>

    {{-- Table --}}
    <div class="bg-white rounded-xl shadow border overflow-hidden">

        <table class="w-full text-sm">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="text-left p-3">Title</th>
                    <th class="text-left p-3">Category</th>
                    <th class="text-left p-3">Total</th>
                    <th class="text-left p-3">Available</th>
                </tr>
            </thead>

            <tbody>
                @forelse($books as $book)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3">{{ $book->title }}</td>
                    <td class="p-3">{{ $book->category ?? 'N/A' }}</td>
                    <td class="p-3">{{ $book->total_copies }}</td>
                    <td class="p-3 text-green-600 font-semibold">
                        {{ $book->available_copies }}
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="p-6 text-center text-gray-400">
                        No books found
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>
@endsection