<?php

namespace App\Http\Controllers;

use App\Models\Secret;
use Illuminate\Http\Request;

class SecretController extends Controller
{
    public function NewSecret(Request $request)
    {
        $secret = new Secret();
        $random_id = bin2hex(random_bytes(16));
        $secret->id = $random_id;
        $secret->password = encrypt($request->input('password'));
        $secret->time_valid = $request->input('time_valid');
        $secret->uses = $request->input('uses');
        $secret->save();
        return $this->ShowLink($random_id);
    }

    public function ShowLink($id = null)
    {
        if ($id == null) {
            return redirect()->route('home');
        }

        $link = url()->to('/secret/' . $id);
        return view('showLink', ['link' => $link]);
    }

    public function ShowSecret($id)
    {
        $secret = Secret::find($id);
        if ($secret && $secret->uses > 0) {
            $secret->uses -= 1;
            $secret->save();
            if ($secret->created_at->addHours($secret->time_valid)->isPast()) {
                return 'Secret expired';
            }
            $password = decrypt($secret->password);
            if ($secret->uses == 0) {
                $secret->delete();
            }
        return view('showSecret', compact('password'));
        }
        else {
            return redirect()->route('expired');
        }
    }

    public function ShowExpired()
    {
        return view('expired');
    }
}
