<?php 
namespace App\Services\Api\Comment;

use App\ApiResponse\ApiResponse;
use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;
use App\Repositories\CommentRepository;
use Exception;
use Illuminate\Support\Str;

class AddService extends BaseService
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
            $commentData = $this->data;
            //dd($this->data['cmtParent']);
            $commentData['user_id'] = Auth::guard('api-member')->id();
            $data = $this->commentRepository->create($commentData);
            if (isset($commentData['cmtParent'])){
                $cmtParentPath = $this->commentRepository->find($commentData['cmtParent'])['path'];
                $path = $cmtParentPath . "." . str_pad($data->id, 5, "0", STR_PAD_LEFT);
            } else {
                $path = str_pad($data->id, 5, "0", STR_PAD_LEFT);
            }
            $this->commentRepository->update($data->id, ['path'=>$path]);
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