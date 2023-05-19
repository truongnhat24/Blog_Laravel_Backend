<?php 
namespace App\Services\Api\Post;

use App\ApiResponse\ApiResponse;
use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;
use App\Repositories\BlogRepository;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Services\FileService;
use Illuminate\Support\Arr;

class EditService extends BaseService
{
    use ApiResponse;
    protected $id;
    private BlogRepository $blogRepository;
    public function __construct(BlogRepository $blogRepository) 
    {
        $this->blogRepository = $blogRepository;
    }

    public function handle()
    {
        try 
        {
            $blogData = $this->data;
            if (Arr::has($blogData, 'image')) {
                $image = $blogData['image'];
                $imageUploaded = FileService::upload('images', $this->data['image']);
                $blogData['image'] = $imageUploaded['path'];
            }
            $blogData['user_id'] = Auth::guard('api-member')->id();
            $blogData['category'] = 1;
            $blogData['slug'] = Str::slug($blogData['title']);
            $this->blogRepository->update($this->id, $blogData);
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