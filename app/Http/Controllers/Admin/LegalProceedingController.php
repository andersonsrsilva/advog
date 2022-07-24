<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LegalProceeding;
use App\Repositories\LegalProceedingRepository;

class LegalProceedingController extends Controller
{
    protected $legalProceedingRepository;

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);

        $this->legalProceedingRepository = new LegalProceedingRepository();
    }

    public function index()
    {
        try {
            return view('admin.legal-proceeding.index', ['legalProceeding' => LegalProceeding::paginate()]);
        } catch (Exception $e) {
            return back()->withFlashDanger($e->getMessage());
        }
    }

    public function create()
    {
        try {
        } catch (Exception $e) {
            return back()->withFlashDanger($e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
        } catch (Exception $e) {
            return back()->withFlashDanger($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
        } catch (Exception $e) {
            return back()->withFlashDanger($e->getMessage());
        }
    }

    public function destroy(Request $request)
    {
        try {
        } catch (Exception $e) {
            return back()->withFlashDanger($e->getMessage());
        }
    }

    public function store(CustomerRequest $request)
    {
        try {
        } catch (Exception $e) {
            return back()->withFlashDanger($e->getMessage());
        }
    }

    public function update(CustomerRequest $request, $id)
    {
        try {
        } catch (Exception $e) {
            return back()->withFlashDanger($e->getMessage());
        }
    }

}
