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
          <td>Nr</td>
          <td>Pealkiri</td>
          <td>Kirjeldus</td>
          
          <td colspan = 2></td>
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