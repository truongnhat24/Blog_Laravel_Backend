<?php 
namespace App\Services\User;

use App\Services\BaseService;
use App\Repositories\UserRepository;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginService extends BaseService
{
    private UserRepository $userRepository;
    public function __construct(UserRepository $userRepository) 
    {
        $this->userRepository = $userRepository;
    }
 
    public function handle()
    {
        $loginData = $this->data;
        if (Auth::attempt($loginData)) 
        {
            //var_dump(Auth::id()); exit();
            return redirect()->route('home')->withMessage('success');
        }
        return redirect()->route('login')->withMessage('password or email not valid');
        
    }
}
?>