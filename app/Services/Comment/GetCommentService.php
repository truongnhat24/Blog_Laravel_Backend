<?php 
namespace App\Services\Comment;

use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;
use App\Repositories\CommentRepository;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class GetCommentService extends BaseService
{
    private CommentRepository $commentRepository;
    protected $id;
    public function __construct(CommentRepository $commentRepository) 
    {
        $this->commentRepository = $commentRepository;
    }

    public function handle()
    {
        return $this->commentRepository->getCommentRecord($this->id);
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }
}
?>