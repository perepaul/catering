<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        $valid = $request->validate([
            'name' => ['required', 'max:191'],
            'email' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'message' => ['required'],
        ]);
        DB::beginTransaction();
        try {
            Contact::create($valid);
            DB::commit();
        } catch (Throwable $th) {
            DB::rollBack();
            throw $th;
        }
        return response()->json();
    }
}
