@foreach($comments as $comment)
    <div class="display-comment" 
        <strong>{{ $comment->user->name }}</strong>
        <p>{{ $comment->content }}</p>
        <form action="{{ route('comments.destroy', $comment->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit"e>Kustuta</button>
                </form>
        
        
    </div>
@endforeach
<form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="content" class="form-control" />
                
                <input type="hidden" name="article_id" value="{{ $article->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Lisa kommentaar" />
            </div>
        </form>