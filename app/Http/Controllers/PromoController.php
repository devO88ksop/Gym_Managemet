<?php

namespace App\Http\Controllers;


use App\Models\Promotions;
use Illuminate\Http\Request;
use App\Interfaces\PromotionInterface;

class PromoController extends Controller
{
    private $b;
    public function __construct(PromotionInterface $promoInterface)
    {
        $this->b = $promoInterface;
    }
    public function index()
    {
        $promos =$this->b->all();
        // dd($promos);
        return view('admin.promolist', compact('promos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.createPromo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->b->store($request );
        return redirect('/promo');

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
        $promos=$this->b->findById($id);

        // dd($promos->toArray());
        return view('admin.editPromo', compact('promos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all(), $id);
        $this->b->update($id);
        return redirect('/promo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->b->destroy($id);
        return back();
    }
}
