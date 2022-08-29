<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\StringUtils;
use App\Http\Controllers\Controller;
use App\Http\Requests\LegalProceedingRequest;
use App\Models\LegalProceeding;
use App\Models\LegalProceedingCustomers;
use App\Repositories\CustomerRepository;
use App\Repositories\LawsuitRepository;
use App\Repositories\LawsuitTypeRepository;
use App\Repositories\LegalProceedingAttachedFileRepository;
use App\Repositories\LegalProceedingCustomersRepository;
use App\Repositories\LegalProceedingRepository;
use App\Repositories\UfRepository;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LegalProceedingController extends Controller
{
    protected $ufRepository;
    protected $lawsuitRepository;
    protected $customerRepository;
    protected $lawsuitTypeRepository;
    protected $legalProceedingRepository;
    protected $legalProceedingCustomersRepository;
    protected $legalProceedingAttachedFileRepository;

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);

        $this->ufRepository = new UfRepository();
        $this->lawsuitRepository = new LawsuitRepository();
        $this->customerRepository = new CustomerRepository();
        $this->lawsuitTypeRepository = new LawsuitTypeRepository();
        $this->legalProceedingRepository = new LegalProceedingRepository();
        $this->legalProceedingCustomersRepository = new LegalProceedingCustomersRepository();
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
            return view('admin.legal-proceeding.edit')->with(compact(
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

    public function store(LegalProceedingRequest $request)
    {
        try {
            $legalProceeding = new LegalProceeding;
            $legalProceeding->lawsuit_id = $request->lawsuit_id;
            $legalProceeding->lawsuit_type_id = $request->lawsuit_type_id;
            $legalProceeding->uf_id = $request->uf_id;
            $legalProceeding->legal_address_1 = $request->legal_address_1;
            $legalProceeding->legal_address_2 = $request->legal_address_2;
            $legalProceeding->lawsuit_description = $request->lawsuit_description;
            $legalProceeding->defendant_description = $request->defendant_description;
            $legalProceeding->preliminary_description = $request->preliminary_description;
            $legalProceeding->fact_description = $request->fact_description;
            $legalProceeding->right_description = $request->right_description;
            $legalProceeding->order_description = $request->order_description;
            $legalProceeding->value_lawsuit = StringUtils::cleanMoney($request->value_lawsuit);
            $legalProceeding = $this->legalProceedingRepository->save($legalProceeding);

            foreach ($request->customers as $customer) {
                $cpf = explode(" ", $customer);
                $customer = $this->customerRepository->findPerCpf($cpf[0]);

                $legalProceedingCustomers = new LegalProceedingCustomers;
                $legalProceedingCustomers->legal_proceeding_id = $legalProceeding->id;
                $legalProceedingCustomers->customer_id = $customer->id;
                $this->legalProceedingCustomersRepository->save($legalProceedingCustomers);
            }

            return back()->withFlashSuccess('Processo adicionado com sucesso.');
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

    public function pdf($id)
    {
        try {
            $legalProceeding = $this->legalProceedingRepository->find($id);
            $dompdf = PDF::loadView('admin.legal-proceeding.pdf', compact('legalProceeding'));

            //Storage::put('public/epermit.pdf', $pdf->output());

           return $dompdf->stream();
        } catch (Exception $e) {
            return back()->withFlashDanger($e->getMessage());
        }
    }

    private function imageLogo() {
        $path = 'logo.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        return 'data:image/' . $type . ';base64,' . base64_encode($data);
    }

}
