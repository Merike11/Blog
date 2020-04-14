@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
  <h1 class="display-3">Artiklid</h1> 
  <div>
    <a style="margin: 19px;" href="{{ route('articles.create')}}" class="btn btn-primary">Loo uus artikkel</a>
    </div>     
  <table class="table table-striped">
    <thead>
        <tr>
          <th width="80px">Nr</th>
          <th>Pealkiri</th>
          <th width="150px">Kirjeldus</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->title}}</td>
            <td>{{$article->description}}</td>
            <td>
            <a href="{{ route('articles.edit',$article->id)}}" class="btn btn-primary">Muuda</a>
            </td>
            <td>
                <form action="{{ route('articles.destroy', $article->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit"e>Kustuta</button>
                </form>
            </td>
            <td>@include('articles.commentsDisplay', ['comments' => $article->comments])</td>
        </tr>
        
        @endforeach
    </tbody>
  </table>
<div>
<div class="col-sm-12">

@if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('edukas') }}  
  </div>
@endif
</div>
</div>
@endsection