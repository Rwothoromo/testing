@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2"><!--Offset pushes div a few paces of the left margin-->
            <h1>Submit a link</h1>
            <form action="insert_links" method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="URL">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="description"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>                
        </div>
    </div>
</div>
@endsection