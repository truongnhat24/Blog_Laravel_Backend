<?php 
namespace App\Services\Api\User;

use App\ApiResponse\ApiResponse;
use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;
use App\Repositories\UserRepository;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class GetUserService extends BaseService
{
    use ApiResponse;
    private UserRepository $userRepository;
    protected $id;
    public function __construct(UserRepository $userRepository) 
    {
        $this->userRepository = $userRepository;
    }

    public function handle()
    {
        try
        {
            $user = $this->userRepository->getUser(Auth::guard('api-member')->id());
            return $this->successResponse('Succeed', [$user]);
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