<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use App\Repositories\CustomerRepository;
use App\Repositories\CityRepository;
use App\Models\Customer;
use App\Helpers\StringUtils;

class CustomerController extends Controller
{
    protected $customerRepository;
    protected $cityRepository;

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);

        $this->customerRepository = new CustomerRepository;
        $this->cityRepository = new CityRepository;
    }

    public function index()
    {
        return view('admin.customers.index');
    }

    public function create()
    {
        return view('admin.customers.create');
    }

    public function store(Request $request)
    {
        try {
            $city = $this->cityRepository->perIbgeCode($request->ibge_code);
            $customer = new Customer;
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
            $customer->save();

            return redirect()->route('admin.customers.create')->withFlashSuccess('Cliente adicionado com sucesso.');
        } catch (Exception $e) {
            return redirect()->route('admin.customers.create')->withFlashDanger($e->getMessage());
        }
    }

}

