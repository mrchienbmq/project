@extends("book.book_layout")

@section("main_content")
<div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>title</th>
                <th>year</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->title}}</td>
                    <td>{{$user->pub_year}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
</div>
    @endsection