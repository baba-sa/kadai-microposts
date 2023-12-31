<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * ユーザをフォローするアクション。
     *
     * @param  $post_id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function store($post_id)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをフォローする
        \Auth::user()->favPosts()->attach($post_id);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * ユーザをアンフォローするアクション。
     *
     * @param  $post_id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function destroy($post_id)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをアンフォローする
        \Auth::user()->favPosts()->detach($post_id);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
    /**
     * このユーザに関係するモデルの件数をロードする。
     */
    public function loadRelationshipCounts()
    {
        $this->loadCount(['microposts', 'followings', 'followers']);
    }
}
