<?php 
namespace App\Services\User;

use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;
use App\Repositories\UserRepository;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class GetUserService extends BaseService
{
    private UserRepository $userRepository;
    protected $id;
    public function __construct(UserRepository $userRepository) 
    {
        $this->userRepository = $userRepository;
    }

    public function handle()
    {
        return $this->userRepository->find($this->id);
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }
}
?>