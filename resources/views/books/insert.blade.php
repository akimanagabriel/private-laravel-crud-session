@extends('layout')

@section('content')
    <h1>Create a new book</h1>

    <form class="flex flex-col gap-4" action="/createbook" method="post">
        @csrf
        <label for="">Title</label>
        <input class="border p-2" type="text" name="title" id="">
        <label for="">Author</label>
        <input class="border p-2" type="text" name="author" id="">
        <label for="">Publication year</label>
        <input class="border p-2" type="date" name="published_at" id="">

        <button class="px-6 py-2 text-white bg-indigo-600 rounded hover:bg-amber-950" type="submit">Save book</button>

    </form>
@endsection
