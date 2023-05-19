<?php 
namespace App\Services\Like;

use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;
use App\Repositories\LikeRepository;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class GetLikeCommentService extends BaseService
{
    private LikeRepository $likeRepository;
    protected $id;
    protected $user_id;
    protected $blog_id;
    public function __construct(LikeRepository $likeRepository) 
    {
        $this->likeRepository = $likeRepository;
    }

    public function handle()
    {
        return $this->likeRepository->getLikeRecords($this->user_id, $this->blog_id);
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    public function setUserId($user_id) {
        $this->user_id = $user_id;
        return $this;
    }
    public function setBlogId($blog_id) {
        $this->blog_id = $blog_id;
        return $this;
    }
}
?>