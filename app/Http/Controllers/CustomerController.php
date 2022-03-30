<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function all()
    {
        $array = ['error' => ''];

        $customers = Customer::all();

        $array['customers'] = $customers;

        return $array;
    }

    public function one($id)
    {

        $array = ['error' => ''];

        $customer = Customer::find($id);

        if ($customer) {

            $array['customer'] = $customer;

        } else {

            $array['error'] = 'Erro! Cliente ' . $id . ' não encontrado!';

        }

        return $array;
    }

    public function add(Request $request)
    {
        $array = ['error' => ''];

        $rules = [
            'cpf_cnpj' => 'required|min:11',
            'email_customer' => 'email',
            'address_customer' => 'required|min:10',
            'birth_customer' => 'date',
            'name' => 'required|min:5',
            'phone' => 'min:8'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

            $array['error'] = $validator->getMessageBag();

        } else {

            $cpf_cnpj = $request->input('cpf_cnpj');
            $email_customer = $request->input('email_customer');
            $address_customer = $request->input('address_customer');
            $birth_customer = $request->input('birth_customer');
            $name = $request->input('name');
            $phone = $request->input('phone');

            $customer = new Customer();

            $customer->cpf_cnpj_customer = $cpf_cnpj;

            if ($email_customer) {
                $customer->email_customer = $email_customer;
            }

            $customer->address_customer = $address_customer;

            if ($birth_customer) {
                $customer->birth_customer = $birth_customer;
            }

            $customer->name_customer = $name;

            if ($phone) {
                $customer->phone_customer = $phone;
            }

            $customer->save();

            $array['success'] = 'Cliente cadastrado com sucesso!';

        }

        return $array;
    }

    public function change(Request $request, $id)
    {
        // TODO: change method implementation
    }

    public function delete($id)
    {
        // TODO: delete method implementation
    }
}
