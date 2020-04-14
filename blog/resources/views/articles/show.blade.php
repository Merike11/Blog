@extends('base')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center text-success">Hajusrakendused 3</h3>
                    <br/>
                    <h2>{{ $article->title }}</h2>
                    <p>
                        {{ $article->body }}
                    </p>
                    <hr />
                    <h4>Kommentaarid:</h4>
  
                    @include('article.commentsDisplay', ['comments' => $article->comments, 'article_id' => $article->id])
   
                    <hr />
                    <h4>Lisa kommentaar:</h4>
                    <form method="post" action="{{ route('comments.store'   ) }}">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="body"></textarea>
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Lisa" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection