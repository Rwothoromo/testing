@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Delete a link</h1>
            <table class="table-primary">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Url</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($links as $link)
                        <tr>
                            <td>{{ $link->id }}</td>
                            <td>{{ $link->title }}</td>
                            <td>{{ $link->url }}</td>
                            <td>{{ $link->description }}</td>
                            <td>
                                <form action="delete_links" method="post"><!--The line below must appear within every laravel form-->
                                    {!! csrf_field() !!}
                                    <input type="number" hidden id="link_id" name="link_id" value="{{ $link->id }}">
                                    <button type="submit" class="btn btn-default">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection