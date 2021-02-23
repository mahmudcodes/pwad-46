<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        $title = "All Products";
        return view('products.index', compact('products','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $title = "Create Product";
        return view('products.create', compact('title') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $this->validate($request,[
                'name'=>'required|alpha|max:10|min:5',
                'price'=>'required',
                'sku'=>'required',
                'in_stock'=>'required'
            ]);
        
        $product = new Products;  
        $product->name =  $request->get('name');  
        $product->price = (int)$request->get('price');  
        $product->sku = $request->get('sku');  
        $product->quantity = (int)$request->get('quantity');  
        $product->in_stock = (int)$request->get('in_stock');  
        $product->save();  
        return redirect('/products')->with('success', 'Product created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Products::find($id);  
        return view('products.edit', compact('product'));
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
        $validateData = $this->validate($request,[
                'name'=>'required|alpha|max:10|min:5',
                'price'=>'required',
                'sku'=>'required',
                'in_stock'=>'required'
            ]);
        
        $product = Products::find($id);  
        $product->name =  $request->get('name');  
        $product->price = (int)$request->get('price');  
        $product->sku = $request->get('sku');  
        $product->quantity = (int)$request->get('quantity');  
        $product->in_stock = (int)$request->get('in_stock');  
        $product->save();  
        return redirect('/products')->with('success', 'Product Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::find($id);
        $product->delete();

        return redirect('/products')->with('danger', 'Product deleted!');
    }
}
