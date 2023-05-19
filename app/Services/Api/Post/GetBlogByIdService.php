<?php 
namespace App\Services\Api\Post;

use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;
use App\Repositories\BlogRepository;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\ApiResponse\ApiResponse;

class GetBlogByIdService extends BaseService
{
    use ApiResponse;

    private BlogRepository $blogRepository;
    protected $id;
    public function __construct(BlogRepository $blogRepository) 
    {
        $this->blogRepository = $blogRepository;
    }

    public function handle()
    {
        try 
        {
            $data = $this->blogRepository->getUserBlog($this->id);
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