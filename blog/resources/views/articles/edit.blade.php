@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Muuda artikkel</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('articles.update', $article->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="title">Pealkiri:</label>
                <input type="text" class="form-control" name="title" value={{ $article->title }} />
            </div>

            <div class="form-group">
                <label for="description">Kirjeldus:</label>
                <input type="text" class="form-control" name="description" value={{ $article->description }} />
            </div>
            
            <button type="submit" class="btn btn-primary">Muuda</button>
        </form>
    </div>
</div>
@endsection