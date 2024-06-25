<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderStoreRequest;
use App\Models\CategoryOfProduct;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::latest()->Paginate(10);
        return view('admin.order.index')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                $product = $request->product_id;
        $product_category = CategoryOfProduct::find($product);
        Order::create([
            'product_id' => $product,
        'name' => $request->name,
        'phone_number' => $request->phone_number,
        'total_price' => $request->total_price,        
        'total_length' => $request->total_length,
        'total_weight' => $request->total_weight,
        ]);
        return redirect()->route('products',['product' => $product_category->category_id])->with('success', 'Arizangiz qabul qilindi! Tez orada hodimlarimiz aloqaga chiqishadi.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('admin.order.show', array('order' => $order));
    }

public function updateStatus(Request $request, Order $order)
    {
        if ($request->ajax()) {
            $order->update(['status' => $request->status]);
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('admin.order.edit', array('order' => $order));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $order->update([
            'status' => $request->status, // Update the 'status' field
        ]);

        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->back();
    }
}
