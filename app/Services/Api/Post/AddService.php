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
use Illuminate\Http\File;
use Illuminate\Support\Arr;

class AddService extends BaseService
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
            $blogData = $this->data;
            $image = $blogData['image'];  // your base64 encoded
            $path = FileService::uploadImgBase64('images', $image);
            $blogData['image'] = $path['path'];

            // if (Arr::has($blogData, 'image')) {
            //     $image = $blogData['image'];
            //     $imageUploaded = FileService::upload('images', $this->data['image']);
            //     $blogData['image'] = $imageUploaded['path'];
            // }
            $blogData['user_id'] = Auth::guard('api-member')->id();
            $blogData['category'] = 1;
            $blogData['slug'] = Str::slug($blogData['title']);
            $this->blogRepository->create($blogData);

            return $this->successResponse('Succeed', []);
        } catch (Exception $e) 
        {   
            //dd($e);
            return $this->errorResponse('Failed', [$e]) ;
        }
    }
}
?>