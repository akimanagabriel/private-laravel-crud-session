@extends('layout')

@section('content')
    <div class="flex justify-between mb-5">
        <h1 class="text-2xl">All Books</h1>
        <a class="bg-indigo-600 text-white px-6 py-2" href="/showform">add new book</a>
    </div>

    <table>
        <thead>
            <tr>
                <th class="px-6 border bg-slate-200">No</th>
                <th class="px-6 border bg-slate-200">Title</th>
                <th class="px-6 border bg-slate-200">Author</th>
                <th class="px-6 border bg-slate-200">Published since</th>
                <th class="px-6 border bg-slate-200">Written at</th>
                <th class="px-6 border bg-slate-200">Upated time</th>
            </tr>
        </thead>
        <tbody>
            {{-- <h1>{{ count($books) }}</h1> --}}
            @foreach ($books as $book)
                <tr>
                    <td class="px-6 border">{{ $loop->index + 1 }}</td>
                    <td class="px-6 border">{{ $book->title }}</td>
                    <td class="px-6 border">{{ $book->author }}</td>
                    <td class="px-6 border">{{ $book->published_at }}</td>
                    <td class="px-6 border">{{ $book->created_at }}</td>
                    <td class="px-6 border">{{ $book->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
