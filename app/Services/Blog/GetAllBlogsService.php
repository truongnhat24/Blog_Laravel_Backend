<?php 
namespace App\Services\Blog;

use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;
use App\Repositories\BlogRepository;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class GetAllBlogsService extends BaseService
{
    private BlogRepository $blogRepository;
    public function __construct(BlogRepository $blogRepository) 
    {
        $this->blogRepository = $blogRepository;
    }

    public function handle()
    {
        return $this->blogRepository->getAll();
    }
}
?>