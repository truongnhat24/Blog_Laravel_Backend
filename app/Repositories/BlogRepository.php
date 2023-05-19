<?php
namespace App\Repositories;

use App\Models\Post;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
class BlogRepository extends BaseRepository
{
    /**
     * Get the model of User
     *
     * @return string
     */
    public function getModel()
    {
        return Post::class;
    }

    public function getUserBlog(string $id) {
        $blogs = Post::where('user_id', $id)->get();
        return $blogs;
    }

}
?>