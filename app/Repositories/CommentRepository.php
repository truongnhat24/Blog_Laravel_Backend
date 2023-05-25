<?php
namespace App\Repositories;

use App\Models\Comment;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
class CommentRepository extends BaseRepository
{
    /**
     * Get the model of Comment
     *
     * @return string
     */
    public function getModel()
    {
        return Comment::class;
    }

    public function getCommentBlog($post_id) 
    {
        $comments = Comment::where('post_id', $post_id)->get();
        return $comments;
    }

    public function getCommentRecord($id) 
    {
        $data = DB::table('comments')
                    ->select('comments.*', 'users.name', 'users.image', 'users.role')
                    ->join('users', 'users.id', '=', 'comments.user_id')
                    ->where('post_id', '=', $id )->get();
        return $data;
    }
}
?>