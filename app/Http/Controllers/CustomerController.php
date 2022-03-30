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
        // TODO: one method implementation
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
