<?php 
namespace App\Services\Api\Like;

use App\ApiResponse\ApiResponse;
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
    private $id;
    private $type;
    public function __construct(
        LikeRepository $likeRepository,
        CommentRepository $commentRepository
        ) 
    {
        $this->likeRepository = $likeRepository;
        $this->commentRepository = $commentRepository;
    }

    public function handle()
    {
        try
        {
            $likeData = [
                'user_id' => Auth::guard('api-member')->id(), 
                'type_id' => $this->id, 
                'type' => $this->type
            ];
            $commentData = $this->commentRepository->find($this->id);
            $checkLikeData = $this->likeRepository->getAll();
            
            foreach ($checkLikeData as $data) 
            {
                if(
                    $data['user_id'] == $likeData['user_id'] and 
                    $data['type_id'] == $likeData['type_id'] and 
                    $data['type'] == $likeData['type']
                    ) 
                {
                    $commentData['like_count'] -= 1;
                    $this->commentRepository->update($this->id, $commentData->toArray());
                    $this->likeRepository->delete($data['id']);
                    return $this->successResponse('Succeed', []);
                }
            }
            $commentData['like_count'] += 1;
            $this->commentRepository->update($this->id, $commentData->toArray());
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

    public function setType($type) {
        $this->type = $type;
        return $this;
    }
}
?>