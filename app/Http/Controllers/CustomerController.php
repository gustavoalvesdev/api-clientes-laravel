<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

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
        // TODO: add method implementation
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
