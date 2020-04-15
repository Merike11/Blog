@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Lisa artikkel</h1>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="post" action="{{ route('articles.store') }}">
                @csrf
                <div class="form-group">    
                    <label for="title">Pealkiri:</label>
                    <input type="text" class="form-control" name="title"/>
                </div>

                <div class="form-group">
                    <label for="description">Kirjeldus:</label>
                    <input type="text" class="form-control" name="description"/>
                </div>
                <br>                                           
                <button type="submit" class="btn btn-primary-outline">Lisa artikkel</button>
            </form>
        </div>
    </div>
</div>