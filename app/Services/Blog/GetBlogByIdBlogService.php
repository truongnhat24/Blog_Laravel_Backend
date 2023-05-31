<?php 
namespace App\Services\Blog;

use App\ApiResponse\ApiResponse;
use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;
use App\Repositories\BlogRepository;
use App\Repositories\LikeRepository;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class GetBlogByIdBlogService extends BaseService
{
    use ApiResponse;
    private BlogRepository $blogRepository;
    private LikeRepository $likeRepository;
    protected $id;
    public function __construct(
        BlogRepository $blogRepository,
        LikeRepository $likeRepository
        )
    {
        $this->blogRepository = $blogRepository;
        $this->likeRepository = $likeRepository;
    }

    public function handle()
    {
        try
        {
            $data = $this->blogRepository->find($this->id);
            $likeData = $this->likeRepository->getLikeBlogRecord(Auth::guard('api-member')->id(), $this->id,'blog')->toArray();
            $data['checkLikeBlog'] = false;
            if($likeData != null) {
                $data['checkLikeBlog'] = true;
            }
            return $this->successResponse('Succeed', [$data]);
        }
        catch (Exception $e)
        {
            return $this->errorResponse('Failed', []) ;
        }
    }
    
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
}
?>