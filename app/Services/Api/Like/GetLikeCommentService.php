<?php 
namespace App\Services\Api\Like;

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
    public function __construct(LikeRepository $likeRepository) 
    {
        $this->likeRepository = $likeRepository;
    }

    public function handle()
    {
        return $this->likeRepository->getLikeRecords($this->id);
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }
}
?>