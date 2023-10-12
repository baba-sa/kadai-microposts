@if (Auth::user()->is_favor($micropost->id))
    {{-- unfavボタンのフォーム --}}
    <form method="POST" action="{{ route('favorites.unfavorite', $micropost->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-outline btn-error btn-sm normal-case">Unfav</button>
    </form>
@else
    {{-- favボタンのフォーム --}}
    <form method="POST" action="{{ route('favorites.favorite', $micropost->id) }}">
        @csrf
        <button type="submit" class="btn btn-accent btn-sm normal-case">Fav</button>
    </form>
@endif
