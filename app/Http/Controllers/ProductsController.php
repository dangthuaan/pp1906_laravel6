<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ProductCreateRequest;
use Illuminate\Support\Facades\Log;
use App\Models\Product;
use Exception;
use Auth;
use Carbon\Carbon;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ProductCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCreateRequest $request)
    {
        //$data = $request->all(); //lấy dữ liệu tất cả(thừa)
        $data = $request->only([
            'title',
            'author',
            'publisher',
            'publish_date',
            'language',
            'price',
        ]);
        //$data['user_id'] = auth()->id();
        $data['user_id'] = Auth::id();

        $data['publish_date'] = Carbon::parse($request->publish_date)->format('Y-m-d');

        try {
            $product = Product::create($data);
        } catch (Exception $e) {
            Log::error($e);
            return back()->with('statusFailed', 'Create failed!');
        }
        return redirect('shop/products/' . $product->id)->with('statusSuccess', 'Create success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        $data = ['product' => $product];

        return view('products.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$product = Product::find($id);
        $product = Product::findOrFail($id);

        $data = ['product' => $product];

        return view('products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductCreateRequest $request, $id)
    {
        $data = $request->only([
            'title',
            'author',
            'publisher',
            'publish_date',
            'language',
            'price',
        ]);

        $product = Product::findOrFail($id);

        try {
            $product->update($data);
        } catch (Exception $e) {
            \Log::error($e);
            return back()->with('statusFailed', 'Update failed!');
        }
        return redirect('shop/products/' . $product->id)->with('statusSuccess', 'Update success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        try {
            Product::destroy($id);
        } catch (Exception $e) {
            return back()->with('statusFailed', 'Delete failed!');
        }
        return redirect('shop/products')->with('statusFailed', 'Product deleted!');
    }
}
