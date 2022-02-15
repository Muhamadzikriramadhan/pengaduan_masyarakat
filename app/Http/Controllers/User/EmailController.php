<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\VerifikasiEmailUntukRegistrasiPengaduanMasyarakat;
use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class EmailController extends Controller
{
    public function sendVerification()
    {
        $nik = Auth::guard('masyarakat')->user()->nik;
        $email = Auth::guard('masyarakat')->user()->email;
        $nama = Auth::guard('masyarakat')->user()->nama;
        $link = URL::temporarySignedRoute('pekat.verify', now()->addMinutes(30), ['nik' => $nik]);
        Mail::to($email)->send(new VerifikasiEmailUntukRegistrasiPengaduanMasyarakat($nama, $link));

        return redirect()->back();
    }

    public function verify($nik, Request $request)
    {
        $masyarakat = Masyarakat::where('nik', $nik)->first();

        if ($masyarakat->email_verified_at == null) {
            if ($request->hasValidSignature()) {

                date_default_timezone_set('Asia/Bangkok');

                $masyarakat->update(['email_verified_at' => date('Y-m-d h:i:s')]);

                return view('User.Mail.success');
            } else {
                return view('User.Mail.failed');
            }
        } else {
            return view('User.Mail.failed');
        }
    }
}
