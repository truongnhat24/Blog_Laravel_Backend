<?php 
namespace App\Services\User;

use App\Services\BaseService;
use App\Repositories\UserRepository;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class RegisterService extends BaseService
{
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
            return redirect()->route('login')->withMessage('success');
        } catch (Exception $e) 
        {
            Log::error('[ERROR_CREATE_USER]:'. $e->getMessage());
            return redirect()->route('register')->withMessage('fail');
        }
    }
}
?>