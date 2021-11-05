<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    private $store;

    public function __construct(Store $store)
    {
        $this->store = $store;
    }

    public function index()
    {
       return $this->store->paginate(10);

    }


    public function store(Request $request)
    {
        return $this->store->create($request->all());
    }


    public function show(Store $store)
    {
        return $store;
    }


    public function update(Request $request, Store $store)
    {
        $store->update($request->all());

        return $store;
    }


    public function destroy(Store $store)
    {
        return $store->delete();
    }
}
