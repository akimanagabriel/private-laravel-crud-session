@extends('layout')

@section('content')
    <h1>Edit book</h1>

    <form class="flex flex-col gap-4" action="/updatebook/{{ $book->id }}" method="post">
        @csrf
        @method('put')
        <label for="">Title</label>
        <input value="{{ $book->title }}" class="border p-2" type="text" name="title" id="">
        <label for="">Author</label>
        <input value="{{ $book->author }}" class="border p-2" type="text" name="author" id="">
        <label for="">Publication year</label>
        <input value="{{ $book->published_at }}" class="border p-2" type="date" name="published_at" id="">

        <button class="px-6 py-2 text-white bg-indigo-600 rounded hover:bg-amber-950" type="submit">Save changes</button>

    </form>
@endsection
