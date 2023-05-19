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
use Illuminate\Support\Str;
use App\Services\FileService;
use Illuminate\Support\Arr;

class EditService extends BaseService
{
    use ApiResponse;
    protected $id;
    private UserRepository $userRepository;
    public function __construct(UserRepository $userRepository) 
    {
        $this->userRepository = $userRepository;
    }

    public function handle()
    {
        try
        {
            $userData = $this->data;
            if (Arr::has($userData, 'image')) {
                $image = $userData['image'];
                $imageUploaded = FileService::upload('images', $this->data['image']);
                $userData['image'] = $imageUploaded['path'];
            }
            $this->userRepository->update($this->id, $userData);
            return $this->successResponse('Succeed', []);
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