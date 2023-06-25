<?php

namespace App\Http\Controllers;

use App\Helper\FileUploadHelper;
use App\Models\Sponsor;
use App\Http\Requests\StoreSponsorRequest;
use App\Http\Requests\UpdateSponsorRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sponsors = Sponsor::all();
        return view('admin.sponsor.index', [
            'sponsors' => $sponsors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sponsor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSponsorRequest $request)
    {
        $request->validated();
        DB::beginTransaction();
        try {
            $filePath = (new FileUploadHelper)->uploadImageToStorage($request->file('logo'), "/sponsors/$request->name");
            $data = array_merge($request->only('name', 'description', 'tier'), ['logo' => $filePath]);
            Sponsor::create($data);
            DB::commit();

            return redirect('/admin/sponsor');
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Sponsor $sponsor)
    {
        return view('admin.sponsor.show', [
            'sponsor' => $sponsor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sponsor $sponsor)
    {
        return view('admin.sponsor.edit', [
            'sponsor' => $sponsor
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSponsorRequest $request, Sponsor $sponsor)
    {
        $request->validated();
        DB::beginTransaction();
        try {
            if ($request->hasFile('logo')) {
                if (!Str::contains($sponsor->logo, 'samples/sponsor')) {
                    unlink($sponsor->logo);
                }

                $filePath = (new FileUploadHelper)->uploadImageToStorage($request->file('logo'), "/sponsors/$request->name");
                $sponsor->update(['logo' => $filePath]);
            }
            $sponsor->update($request->only('name', 'description', 'tier'));
            DB::commit();

            return redirect("/admin/sponsor");
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sponsor $sponsor)
    {
        DB::beginTransaction();
        try {
            File::deleteDirectory("storage/sponsors/$sponsor->name");
            $sponsor->delete();
            DB::commit();

            return redirect('/admin/sponsor');
        } catch (\Throwable $th) {
            DB::rollback();

            throw $th;
        }
    }
}
