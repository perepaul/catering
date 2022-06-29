<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Traits\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    use UploadFile;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::latest()->paginate();
        return view('admin.gallery.index', [
            'galleries' => $galleries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg'],
            'status' => ['required', 'string', 'in:active,inactive']
        ]);

        // dd($request->all());

        DB::beginTransaction();
        try {
            Gallery::create([
                'active' => $request->input('status'),
                'image' => $this->uploadFile('uploads/galleries', $request->file('image'))
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
        return redirect()->route('admin.galleries.index')->withSuccess('Created Successfully');
    }

    /**
     * Display the specified resource.§
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $valid = $request->validate([
            'image' => ['nullable', 'image', 'mimes:png,jpg,jpeg'],
            'status' => ['required', 'string', 'in:active,inactive']
        ]);

        DB::beginTransaction();

        try {
            if ($request->hasFile('image')) {
                $valid['image'] = $this->uploadFile('uploads/galleries', $request->file('image'));
                $this->deleteFile($gallery->image);
            }
            $gallery->update($valid);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
        return redirect()->route('admin.galleries.index')->withSuccess('Updated Successfully');
    }

    private function deleteFile($path)
    {
        if (file_exists($file =  public_path($path)))
            unlink($file);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(string|array $gallery)
    {
        try {
            $gallery = is_numeric($gallery) ? [$gallery] : json_decode($gallery, true);
            $galleries = Gallery::whereIn('id', $gallery);
            foreach ($galleries->get() as $gal) {
                $this->deleteFile($gal->image);
                $gal->delete();
            }
            $galleries->delete();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        return response()->json(['message' => 'Item(s) deleted']);
    }
}
