<?php

namespace App\Http\Controllers;

use App\Http\Requests\PriceRuleRequest;
use App\Models\PriceRule;

class PriceRuleController extends Controller
{
    public function index()
    {
        return PriceRule::all();
    }

    public function store(PriceRuleRequest $request)
    {
        return PriceRule::create($request->validated());
    }

    public function show(PriceRule $priceRule)
    {
        return $priceRule;
    }

    public function update(PriceRuleRequest $request, PriceRule $priceRule)
    {
        $priceRule->update($request->validated());

        return $priceRule;
    }

    public function destroy(PriceRule $priceRule)
    {
        $priceRule->delete();

        return response()->json();
    }
}
