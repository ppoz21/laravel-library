@extends('template')

@section('title')
    Books list
@endsection

@section('content')
    <div class="container">
        @forelse($booksList as $book)
            Book details here
        @empty
            Nothing found!
        @endforelse
    </div>
@endsection()
