<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LegalProceeding;
use App\Repositories\LawsuitRepository;
use App\Repositories\LawsuitTypeRepository;
use App\Repositories\LegalProceedingAttachedFileRepository;
use App\Repositories\LegalProceedingRepository;
use App\Repositories\UfRepository;
use Illuminate\Http\Request;

class LegalProceedingController extends Controller
{
    protected $ufRepository;
    protected $lawsuitRepository;
    protected $lawsuitTypeRepository;
    protected $legalProceedingRepository;
    protected $legalProceedingAttachedFileRepository;

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);

        $this->ufRepository = new UfRepository();
        $this->lawsuitRepository = new LawsuitRepository();
        $this->lawsuitTypeRepository = new LawsuitTypeRepository();
        $this->legalProceedingRepository = new LegalProceedingRepository();
        $this->legalProceedingAttachedFileRepository = new LegalProceedingAttachedFileRepository();
    }

    public function index()
    {
        try {
            return view('admin.legal-proceeding.index', ['legalProceedings' => LegalProceeding::paginate()]);
        } catch (Exception $e) {
            return back()->withFlashDanger($e->getMessage());
        }
    }

    public function create()
    {
        try {
            $legalProceeding = new LegalProceeding;
            $uf = $this->ufRepository->all();
            $lawsuits = $this->lawsuitRepository->all();
            $lawsuitTypes = $this->lawsuitTypeRepository->all();
            return view('admin.legal-proceeding.create')->with(compact(
                'legalProceeding',
                'lawsuits',
                'lawsuitTypes',
                'uf',
            ));
        } catch (Exception $e) {
            return back()->withFlashDanger($e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $legalProceeding = $this->legalProceedingRepository->find($id);
            $uf = $this->ufRepository->all();
            $lawsuits = $this->lawsuitRepository->all();
            $lawsuitTypes = $this->lawsuitTypeRepository->all();
            return view('admin.legal-proceeding.show')->with(compact(
                'legalProceeding',
                'lawsuits',
                'lawsuitTypes',
                'uf',
            ));
        } catch (Exception $e) {
            return back()->withFlashDanger($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $legalProceeding = $this->legalProceedingRepository->find($id);
            $uf = $this->ufRepository->all();
            $lawsuits = $this->lawsuitRepository->all();
            $lawsuitTypes = $this->lawsuitTypeRepository->all();
            $disabled = 'disabled';
            $blocked =  'disabled';
            return view('admin.legal-proceeding.show')->with(compact(
                'disabled',
                'blocked',
                'legalProceeding',
                'lawsuits',
                'lawsuitTypes',
                'uf',
            ));
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

    public function store(Request $request)
    {
        try {
            dd($request);
        } catch (Exception $e) {
            return back()->withFlashDanger($e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
        } catch (Exception $e) {
            return back()->withFlashDanger($e->getMessage());
        }
    }

    public function number($id)
    {
        try {
            $legalProceeding = $this->legalProceedingRepository->find($id);
            $uf = $this->ufRepository->all();
            $lawsuits = $this->lawsuitRepository->all();
            $lawsuitTypes = $this->lawsuitTypeRepository->all();
            $disabled = 'disabled';
            $showNumber = true;
            return view('admin.legal-proceeding.show')->with(compact(
                'disabled',
                'showNumber',
                'legalProceeding',
                'lawsuits',
                'lawsuitTypes',
                'uf',
            ));
        } catch (Exception $e) {
            return back()->withFlashDanger($e->getMessage());
        }
    }


}
