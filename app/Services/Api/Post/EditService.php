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
            $user_id_blog = $this->blogRepository->find($this->id)->user_id;
            if($this->checkAuththor($user_id_blog)){
                $blogData = $this->data;
                if(isset($blogData['image'])){
                    $image = $blogData['image'];
                    $path = FileService::uploadImgBase64('images', $image);
                    $blogData['image'] = $path['path'];
                }
                $blogData['category'] = 1;
                $blogData['slug'] = Str::slug($blogData['title']);
                $this->blogRepository->update($this->id, $blogData);
                return $this->successResponse('Succeed', []);
            } else {
                return $this->errorResponse('Failed', []);
            }
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

    public function checkAuththor($user_id) {
        if (Auth::guard('api-member')->id() == $user_id) {
            return true;
        } else {
            return false;
        }
    }
}
?>