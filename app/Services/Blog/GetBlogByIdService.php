<?php 
namespace App\Services\Blog;

use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;
use App\Repositories\BlogRepository;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class GetBlogByIdService extends BaseService
{
    private BlogRepository $blogRepository;
    protected $id;
    public function __construct(BlogRepository $blogRepository) 
    {
        $this->blogRepository = $blogRepository;
    }

    public function handle()
    {
        return $this->blogRepository->getUserBlog($this->id);
    }
    
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
}
?>