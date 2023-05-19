<?php 
namespace App\Services\User;

use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;
use App\Repositories\UserRepository;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Services\FileService;
use Illuminate\Support\Arr;

class EditService extends BaseService
{
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
            $data = $userData['address'];
            $userData['address'] = $data;
            if (Arr::has($userData, 'image')) {
                $image = $userData['image'];
                $imageUploaded = FileService::upload('images', $this->data['image']);
                $userData['image'] = $imageUploaded['path'];
            }
            $this->userRepository->update($this->id, $userData);
            return redirect()->route('users.viewUser', Auth::id())->withMessage('Success');
        }
        catch (Exception $e)
        {
            Log::error('[ERROR_CREATE_BLOG]:'. $e->getMessage());
            return redirect()->route('users.editUserForm', Auth::id())->withMessage('Fail');
        }
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }
}
?>