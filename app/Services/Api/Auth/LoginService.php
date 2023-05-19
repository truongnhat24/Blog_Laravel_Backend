<?php 
namespace App\Services\Api\Auth;

use App\Services\BaseService;
use App\Repositories\UserRepository;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\ApiResponse\ApiResponse;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginService extends BaseService
{
    use ApiResponse;
    private UserRepository $userRepository;
    public function __construct(UserRepository $userRepository) 
    {
        $this->userRepository = $userRepository;
    }
 
    public function handle()
    {
        $loginData = $this->credential();
        if (empty($loginData)) {
            return $this->errorResponse('Failed', []);
        }
        $access_token = JWTAuth::fromUser($loginData);
        return $this->successResponse(
            'Succeed', 
            [
                'access_token' => $access_token
            ]
        );
    }

    /**
    * Credential Information
    *
    * @return mixed
    */
    protected function credential()
    {
        $credential = $this->data;
        if (Auth::guard('api-member')->attempt($credential)) {
            return Auth::guard('api-member')->user();
        }
        return null;
    }

    /**
    * Get Token
    *
     * @param User $user
     * @return array
     */
    protected function getToken($user): array
    {
        $token = $user->createToken(config('app.name'));

        return [
            'token_type'   => 'Bearer',
            'access_token' => $token->accessToken,
            'expired_at'   => $token->token->expires_at,
        ];
    }
}
?>