@extends('layouts.app')

@section('content')
    <div class="sm:grid sm:grid-cols-3 sm:gap-10">
        <div class="sm:col-span-2 mt-4">
            {{-- タブ --}}
            @include('users.navtabs')
            @isset($posts)
            <div class="mt-4">
                @foreach($posts as $post)
                <aside>
                    {{$post->user_id}}
                </aside>
                <p>
                    {{$post->content}}
                </p>
                
                
                
                @endforeach
            </div>
            @endisset
        </div>
    </div>
@endsection