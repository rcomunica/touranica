<?php

namespace Modules\SkyTours\Http\Controllers\Admin;

use App\Contracts\Controller;
use Illuminate\Http\Request;
use Modules\SkyTours\Models\Enums\SkReportsStatus;
use Modules\SkyTours\Models\SkReports;
use Modules\SkyTours\Models\SkTours;

/**
 * Admin controller
 */
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        $tours = SkTours::all();
        $reports = SkReports::where('status', SkReportsStatus::PENDING)->get();
        return view('skytours::admin.index', [
            'tours' => $tours,
            'reports' => $reports,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function create(Request $request)
    {
        return view('skytours::admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     */
    public function store(Request $request) {}

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function edit(Request $request)
    {
        return view('skytours::admin.edit');
    }

    /**
     * Show the specified resource.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function show(Request $request)
    {
        return view('skytours::admin.show');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     */
    public function update(Request $request) {}

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     */
    public function destroy(Request $request) {}
}
