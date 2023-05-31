<?php 
namespace App\Services\Api\Comment;

use App\ApiResponse\ApiResponse;
use App\Repositories\CommentRepository;
use App\Repositories\CommentHisRepository;
use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class EditService extends BaseService
{
    use ApiResponse;
    protected $id;
    private CommentRepository $commentRepository;
    private CommentHisRepository $commentHisRepository;
    public function __construct(
            CommentRepository $commentRepository,
            CommentHisRepository $commentHisRepository
        ) 
    {
        $this->commentRepository = $commentRepository;
        $this->commentHisRepository = $commentHisRepository;
    }

    public function handle()
    {
        try 
        {
            $editData = $this->data;
            $editData['status'] = 2;
            $Cmt = $this->commentRepository->find($this->id);
            $oldCmt['content'] = $Cmt['content'];
            $oldCmt['comment_id'] = $this->id;
            
            $this->commentHisRepository->create($oldCmt);
            $this->commentRepository->update($this->id, $editData);
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