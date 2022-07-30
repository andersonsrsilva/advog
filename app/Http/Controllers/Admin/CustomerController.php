<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\StringUtils;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use App\Repositories\CityRepository;
use App\Repositories\CustomerRepository;
use App\Repositories\UfRepository;
use Exception;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customerRepository;
    protected $cityRepository;
    protected $ufRepository;

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);

        $this->customerRepository = new CustomerRepository;
        $this->cityRepository = new CityRepository;
        $this->ufRepository = new UfRepository;
    }

    public function index()
    {
        try {
            return view('admin.customers.index', ['customers' => Customer::paginate()]);
        } catch (Exception $e) {
            return back()->withFlashDanger($e->getMessage());
        }
    }

    public function create()
    {
        try {
            $customer = new Customer;
            $uf = $this->ufRepository->all();
            return view('admin.customers.create')->with(compact('customer', 'uf'));
        } catch (Exception $e) {
            return back()->withFlashDanger($e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $customer = $this->customerRepository->find($id);
            $uf = $this->ufRepository->all();
            return view('admin.customers.edit')->with(compact('customer', 'uf'));
        } catch (Exception $e) {
            return back()->withFlashDanger($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $customer = $this->customerRepository->find($id);
            $uf = $this->ufRepository->all();
            $disabled = 'disabled';
            return view('admin.customers.show')->with(compact('customer', 'uf', 'disabled'));
        } catch (Exception $e) {
            return back()->withFlashDanger($e->getMessage());
        }
    }

    public function destroy(Request $request)
    {
        try {
            $this->customerRepository->destroy($request->id);
            return redirect()->route('admin.customers')->withFlashSuccess('Cliente excluido com sucesso.');
        } catch (Exception $e) {
            return back()->withFlashDanger($e->getMessage());
        }
    }

    public function store(CustomerRequest $request)
    {
        try {
            if(!isset($request->ibge_code)) {
                $ibge_code = $request->city_select;
            }else {
                $ibge_code = $request->ibge_code;
            }

            $city = $this->cityRepository->perIbgeCode($ibge_code);
            $customer = new Customer;
            $customer->city_id = $city->id;
            $customer->uf_id = $city->uf_id;
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->cpf = StringUtils::clean($request->cpf);
            $customer->cnh = $request->cnh;
            $customer->passport = $request->passport;
            $customer->mobile_phone = StringUtils::clean($request->mobile_phone);
            $customer->home_phone = StringUtils::clean($request->home_phone);
            $customer->zip_code = StringUtils::clean($request->zip_code);
            $customer->address = $request->address;
            $customer->number_address = $request->number_address;
            $customer->other_address = $request->other_address;
            $customer->district_address = $request->district_address;
            $this->customerRepository->save($customer);

            return back()->withFlashSuccess('Cliente adicionado com sucesso.');
        } catch (Exception $e) {
            return back()->withFlashDanger($e->getMessage());
        }
    }

    public function update(CustomerRequest $request, $id)
    {
        try {
            if(!isset($request->ibge_code)) {
                $ibge_code = $request->city_select;
            }else {
                $ibge_code = $request->ibge_code;
            }

            $city = $this->cityRepository->perIbgeCode($ibge_code);
            $customer = $this->customerRepository->find($id);
            $customer->city_id = $city->id;
            $customer->uf_id = $city->uf_id;
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->cpf = StringUtils::clean($request->cpf);
            $customer->cnh = $request->cnh;
            $customer->passport = $request->passport;
            $customer->home_phone = StringUtils::clean($request->home_phone);
            $customer->mobile_phone = StringUtils::clean($request->mobile_phone);
            $customer->zip_code = StringUtils::clean($request->zip_code);
            $customer->address = $request->address;
            $customer->number_address = $request->number_address;
            $customer->other_address = $request->other_address;
            $customer->district_address = $request->district_address;
            $this->customerRepository->save($customer);

            return back()->withFlashSuccess('Cliente editado com sucesso.');
        } catch (Exception $e) {
            return back()->withFlashDanger($e->getMessage());
        }
    }

    public function findPerCpf($cpf)
    {
        return $this->json($this->customerRepository->findPerCpf($cpf));
    }

}

