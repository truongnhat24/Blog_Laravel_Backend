<?php 
namespace App\Services\Api\Like;

use App\ApiResponse\ApiResponse;
use App\Repositories\BlogRepository;
use App\Repositories\CommentRepository;
use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;
use App\Repositories\LikeRepository;
use Exception;
use Illuminate\Support\Str;

class AddService extends BaseService
{
    use ApiResponse;
    private LikeRepository $likeRepository;
    private CommentRepository $commentRepository;
    private BlogRepository $blogRepository;
    private $id;
    private $type;
    public function __construct(
        LikeRepository $likeRepository,
        CommentRepository $commentRepository,
        BlogRepository $blogRepository
        ) 
    {
        $this->likeRepository = $likeRepository;
        $this->commentRepository = $commentRepository;
        $this->blogRepository = $blogRepository;
    }

    public function handle()
    {
        try
        {
            $likeData = $this->data;
            $typeModel = $this->commentRepository;
            if ($likeData['type'] == "blog"){
                $typeModel = $this->blogRepository;
            }
            $likeData['user_id'] = Auth::guard('api-member')->id();
            $typeData = $typeModel->find($likeData['type_id'])->like_count;
            $checkLikeData = $this->likeRepository->getAll();
            foreach ($checkLikeData as $data) {
                if (
                    $data['user_id'] == $likeData['user_id'] &&
                    $data['type_id'] == $likeData['type_id'] &&
                    $data['type'] == $likeData['type']
                    )
                {
                    $typeData -= 1;
                    $typeModel->update($likeData['type_id'], ['like_count' => $typeData]);
                    $this->likeRepository->delete($data['id']);
                    return $this->successResponse('Succeed', []);
                }
            }
            $typeData += 1;
            $typeModel->update($likeData['type_id'], ['like_count' => $typeData]);
            $this->likeRepository->create($likeData);
            return $this->successResponse('Succeed', []);            
        }
        catch (Exception $e)
        {
            return $this->errorResponse('Failed', [$e]) ;
        }
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }
}
?>