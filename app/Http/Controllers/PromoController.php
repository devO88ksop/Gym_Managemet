<?php

namespace App\Http\Controllers;

use App\Interfaces\PromotionInterface;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    private $b;
    public function __construct(PromotionInterface $promoInterface)
    {
        $this->b = $promoInterface;
    }
    public function index()
    {
        $promo=$this->b->all();
        return view('admin.promotions.createPromo',compact('promo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
