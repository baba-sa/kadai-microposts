@if (Auth::id() != $post->id)
    @if (Auth::user()->is_favor($post->id))
        {{-- アンフォローボタンのフォーム --}}
        <form method="POST" action="{{ route('user.unfavorite', $post->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-error btn-block normal-case" 
                onclick="return confirm('id = {{ $user->id }} のフォローを外します。よろしいですか？')">Unfav</button>
        </form>
    @else
        {{-- フォローボタンのフォーム --}}
        <form method="POST" action="{{ route('user.favorites', $post->id) }}">
            @csrf
            <button type="submit" class="btn btn-primary btn-block normal-case">Fav</button>
        </form>
    @endif
@endif