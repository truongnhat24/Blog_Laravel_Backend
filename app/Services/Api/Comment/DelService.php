<?php 
namespace App\Services\Api\Comment;

use App\ApiResponse\ApiResponse;
use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;
use App\Repositories\CommentRepository;
use Exception;
use Illuminate\Support\Str;

class DelService extends BaseService
{
    use ApiResponse;
    private CommentRepository $commentRepository;
    private $id;
    public function __construct(CommentRepository $commentRepository) 
    {
        $this->commentRepository = $commentRepository;
    }

    public function handle()
    {
        try 
        {
            $this->commentRepository->delete($this->id);
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