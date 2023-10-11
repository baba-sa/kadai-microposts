<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFollowController extends Controller
{
    /**
     * postをfavするアクション。
     *
     * @param  $post_id  postのid
     * @return \Illuminate\Http\Response
     */
    public function store($post_id)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをフォローする
        \Auth::user()->favorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * ユーザをアンフォローするアクション。
     *
     * @param  $post_id  postのid
     * @return \Illuminate\Http\Response
     */
    public function destroy($post_id)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをアンフォローする
        \Auth::user()->unfavotire($post_id);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
    /**
     * このユーザに関係するモデルの件数をロードする。
     */
    public function loadFavoritesCounts()
    {
        $this->loadCount(['microposts', 'favorite']);
    }
}
