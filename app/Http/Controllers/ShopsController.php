<?php

namespace App\Http\Controllers;

use App\Models\Shops;
use App\Http\Requests\StoreShopsRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateShopsRequest;

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listItems()
    {
        $shops = Shops::latest()->paginate(5);
        return view('list-items', compact('shops'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function addItem()
    {
        return view('add-item');
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
        $this->authorize('create', Shops::class);
        $request->validate([
            'type' => 'required',
            'condition' => 'required',
            'description' => 'required',
            'defects' => 'nullable',
            'amount' => [
                'required',
                'numeric',
            ],
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Shops::create($input);

        return redirect()->route('list-items')->with('success', 'Shops created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shops $shops)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shops $shops)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShopsRequest $request, Shops $shops)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shops $shops)
    {
        //
    }
}
