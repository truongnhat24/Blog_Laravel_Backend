<?php 
namespace App\Services\Api\Post;

use App\ApiResponse\ApiResponse;
use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;
use App\Repositories\BlogRepository;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class GetAllBlogsService extends BaseService
{
    use ApiResponse;
    private BlogRepository $blogRepository;
    public function __construct(BlogRepository $blogRepository) 
    { 
        $this->blogRepository = $blogRepository;
    }

    public function handle()
    {
        try 
        {
            $data = $this->blogRepository->getAll();
            return $this->successResponse('Succeed', [$data]);
        }
        catch (Exception $e)
        {
            return $this->errorResponse('Failed', []) ;
        }
    }
}
?>