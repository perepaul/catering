<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::latest();
        //filters here
        return view('admin.contacts', [
            'contacts' => $contacts->paginate(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return response()->json(['data' => $contact->toArray()], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(string|array $contact)
    {
        DB::beginTransaction();
        try {
            $contact = !is_numeric($contact)
                ? Contact::whereIn('id', json_decode($contact, true))
                : Contact::where('id', $contact);
            $contact->delete();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        return response()->json(['message' => 'Record(s) deleted']);
    }
}
