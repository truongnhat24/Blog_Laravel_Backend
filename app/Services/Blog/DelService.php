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

class DelService extends BaseService
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
            $this->blogRepository->delete($this->id);
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