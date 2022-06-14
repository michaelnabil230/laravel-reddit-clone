<?php

namespace App\Policies;

use App\Models\Comment;
use App\Models\User;

class CommentPolicy
{
    const CREATE = 'create';

    const UPDATE = 'update';

    const DELETE = 'delete';

    public function update(User $user, Comment $comment): bool
    {
        return $comment->user_id == $user->id || $user->is_admin;
    }

    public function delete(User $user, Comment $comment): bool
    {
        return $comment->user_id == $user->id || $user->is_admin;
    }
}
