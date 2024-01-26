<?php

namespace App\Policies;

use App\Models\Event;
use App\Models\User;
use Illuminate\Auth\Access\Response;


//各メソッド内で、特定の条件やビジネスルールに基づいて、true（許可）またはfalse（拒否）を返すようにロジックを実装


//viewAny: 一覧表示はすべてのユーザーに許可されます。
//view: 特定のイベントの表示はすべてのユーザーに許可されます。
//create: ログインしているユーザーにイベントの作成を許可します。
//update: イベントの所有者のみが、そのイベントの更新を許可されます。
//delete: イベントの所有者のみが、そのイベントの削除を許可されます。
//restore(User $user, Event $event): イベントが削除された後に、ユーザーがイベントを復元できるかどうかを決定します（ソフトデリートの場合）。
//forceDelete(User $user, Event $event): イベントが完全に削除される前に、ユーザーがイベントを永久的に削除できるかどうかを決定します（ソフトデリートの場合）。

class EventPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Event $event): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Event $event): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Event $event): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Event $event): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Event $event): bool
    {
        //
    }
}
