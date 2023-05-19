<?php 
namespace App\Services\Blog;

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
            $categoryData = $this->data;
            if (Arr::has($categoryData, 'image')) {
                $image = $categoryData['image'];
                //dd($this->data['image']);
                $imageUploaded = FileService::upload('images', $this->data['image']);
                $categoryData['image'] = $imageUploaded['path'];
            }
            $categoryData['user_id'] = Auth::id();
            $categoryData['category'] = 1;
            $categoryData['slug'] = Str::slug($categoryData['title']);
            $this->blogRepository->update($this->id, $categoryData);
            return redirect()->route('blogs.blogIndex', ['id' => Auth::id()])->withMessage('Success');            
        }
        catch (Exception $e)
        {
            Log::error('[ERROR_CREATE_BLOG]:'. $e->getMessage());
            return redirect()->route('blogs.blogIndex', ['id' => Auth::id()])->withMessage('Fail');
        }
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }
}
?>