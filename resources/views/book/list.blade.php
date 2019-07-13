@extends("book.book_layout")

@section("main_content")

        <form action="{{url("book/search")}}" method="get">
            {{ csrf_field() }}
            <input type="text" name="title" required/>
            <button type="submit">Submit</button>
        </form>
    <table class="table">
        <thead>
        <th>Book ID</th>
        <th>Author ID</th>
        <th>Title</th>
        <th>ISBN</th>
        <th>Pub year</th>
        <th>available</th>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
            <td>{{$book->book_id}}</td>
            <td>{{$book->author_id}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->ISBN}}</td>
            <td>{{$book->pub_year}}</td>
            <td>{{$book->available}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $books ->links() !!}
@endsection
