<?php
namespace App\Repositories;

use App\Models\Like;
use App\Repositories\BaseRepository;
use Brick\Math\BigInteger;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class LikeRepository extends BaseRepository
{
    /**
     * Get the model of Like
     *
     * @return string
     */
    public function getModel()
    {
        return Like::class;
    }

    public function getLikeRecords($post_id) {
        // $query = "SELECT likes.*
		// 			FROM likes 
		// 			INNER JOIN comments on likes.type_id = comments.id 
    	// 				WHERE likes.user_id = $user_id and comments.blog_id = $blog_id and likes.type_id 
        // 					IN 
        // 					(SELECT  likes.type_id FROM likes)";
							
        $user_id = Auth::guard('api-member')->id();
        $data = DB::table('likes')
                    ->join('comments', 'comments.id', '=', 'likes.type_id')
                    ->where('likes.user_id', '=', $user_id)
                    ->where('comments.post_id', '=', $post_id)
                    ->whereIn('likes.type_id', function ($query) {
                        $query->select('type_id')->from('likes');
                    })->get();
        return $data;
    }
}
?>