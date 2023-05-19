<?php 
namespace App\Services\Api\User;

use Exception;
use App\Services\BaseService;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\ApiResponse\ApiResponse;
use Tymon\JWTAuth\Facades\JWTAuth;

class RegisterService extends BaseService
{
    use ApiResponse;
    private UserRepository $userRepository;
    public function __construct(UserRepository $userRepository) 
    {
        $this->userRepository = $userRepository;
    }

    public function handle()
    {
        try 
        {
            $user = $this->userRepository->create([
                'name' => $this->data['name'],
                'email' => $this->data['email'],
                'password' => Hash::make($this->data['password']),
                'phone' => $this->data['phone'],
            ]);
            return $this->successResponse('Succeed', []);
        } catch (Exception $e) 
        {
            return $this->errorResponse('Failed', []) ;
        }
    }
}
?>