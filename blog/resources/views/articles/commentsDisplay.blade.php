@foreach($comments as $comment)
    <div class="display-comment" 
        <strong>{{ $comment->user->name }}</strong>
        <p>{{ $comment->content }}</p>
        <a href="" id="reply"></a>
        
        
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