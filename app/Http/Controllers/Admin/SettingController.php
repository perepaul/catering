<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Traits\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    use UploadFile;

    public function iconsPage()
    {
        return view('admin.settings.icons');
    }

    public function updateIcons(Request $request)
    {
        // dd('right here');
        $request->validate([
            'favicon' => ['required', 'image', 'mimes:png,jpg,jpeg'],
            'logo' => ['required', 'image', 'mimes:png,jpg,jpeg',]
        ]);

        DB::beginTransaction();
        try {
            $data = [
                'favicon' => $this->uploadFile('uploads/icons', $request->file('favicon')),
                'logo' => $this->uploadFile('uploads/icons', $request->file('logo')),
            ];
            $setting = Setting::whereId(1)->first();
            if ($setting) {
                $setting->update($data);
            } else {
                Setting::create($data);
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        return back()->withSuccess('Updated successfully');
    }

    public function contactPage()
    {

        return view('admin.settings.contact', [
            'setting' => Setting::whereId(1)->first(),
        ]);
    }

    function updateContact(Request $request)
    {
        $valid = $request->validate([
            'phone' => ['required', 'numeric'],
            'email' => ['required', 'email'],
            'address' => ['required', 'string', 'max:191'],
            'chat_script' => ['nullable', 'string'],
            'facebook' => ['nullable', 'string'],
            'instagram' => ['nullable', 'string'],
            'twitter' => ['nullable', 'string'],
            'open_hours' => ['required', 'string'],
        ]);
        // dd($valid);
        DB::beginTransaction();
        try {
            $setting = Setting::whereId(1)->first();
            if ($setting) {
                $setting->update($valid);
            } else {
                Setting::create($valid);
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
        return back()->withSuccess('Details updated');
    }
}
