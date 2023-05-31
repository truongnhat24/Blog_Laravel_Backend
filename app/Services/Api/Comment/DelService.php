<?php 
namespace App\Services\Api\Comment;

use App\ApiResponse\ApiResponse;
use App\Repositories\BlogRepository;
use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;
use App\Repositories\CommentRepository;
use Exception;
use Illuminate\Support\Str;

class DelService extends BaseService
{
    use ApiResponse;
    private CommentRepository $commentRepository;
    private BlogRepository $blogRepository;
    private $id;
    public function __construct(
        CommentRepository $commentRepository,
        BlogRepository $blogRepository
        ) 
    {
        $this->commentRepository = $commentRepository;
        $this->blogRepository = $blogRepository;
    }

    public function handle()
    {
        try 
        {
            $cmtData = $this->commentRepository->find($this->id);
            $blogData = $this->blogRepository->find($cmtData['post_id'])->comment_count;
            $this->commentRepository->delete($this->id);
            $this->commentRepository->delMulti($cmtData['path']);
            if($blogData > 0) {
                $this->blogRepository->update($cmtData['post_id'], ['comment_count' => $blogData-1]);
            }
            return $this->successResponse('Succeed', []);
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