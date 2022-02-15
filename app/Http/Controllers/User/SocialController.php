<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);

        Auth::guard('masyarakat')->login($authUser, true);

        return redirect()->route('pekat.index');
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = Masyarakat::where('provider_id', $user->getId())->first();

        if ($authUser) {
            return $authUser;
        } else {

            $mockNIK = mt_rand(1000000000, 9999999999);

            $index = strpos($user->getEmail(), '@');
            $username = substr($user->getEmail(), 0, $index);

            date_default_timezone_set('Asia/Bangkok');

            $dataUser = Masyarakat::create([
                'nik' => $mockNIK,
                'nama' => $user->getName(),
                'email' => $user->getEmail(),
                'email_verified_at' => date('Y-m-d h:i:s'),
                'username' => $username,
                'password' => '',
                'telp' => '',
                'provider_id' => $user->getId(),
                'provider' => $provider,
            ]);

            return $dataUser;
        }
    }
}
