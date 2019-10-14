<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;
use Validator,Redirect,Response;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.product_store');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('products.product_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        /*$data = request()->validate(['book_title' => 'required']);

        $check = Product::create($data);
        return Redirect::to('/shop/store/add-product-index')->withSuccess('Great! Book information has been added!');
       */

        /*$book_title = $request->input('book_title');         
        DB::table('products')->insert(
            ['book_title' => $book_title]
        );

        echo "Record inserted successfully.<br/>";
        echo '<a href = "/shop/store/add-product-index">Click Here</a> to go back.';
        */

        /*$products = new Product(array(
            'book_title' => $request->get('book_title')
        ));

        $products->save();
        return Redirect::to('/shop/store/add-product-index')->withSuccess('Great! Book information has been added!');*/

       /* $check = $request->validate(['book_title' => 'required']);

        $products = new Product();

        $products->book_title = $request->book_title;

        $products->save();

        return Redirect::to('/shop/store/create-product')->withSuccess('Great! Book information has been added!');*/

        $input = $request->all();

        $rules = [
            'book_title' => 'required'
        ];

        $messages = [
            'required' => 'You must enter the :attribute!',
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            return redirect('/shop/store/create-product')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            $products = new Product();

            $products->book_title = $request->book_title;

            $products->save();

            return Redirect::to('/shop/store/create-product')->withSuccess('Great! Book information has been added!');
        }

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        $data = ['product' => $product];

        return view('products.product_details', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
