<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        $num = 1;
        return view('cms.productControll.products.index', compact('products', 'num'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $product = new Product();
        $categories = Category::all();
        return view('cms.productControll.products.create', compact('categories', 'product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validate = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',
            'category_id' => 'required',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/cms/images/products'), $imageName);
        $image = Image::make(public_path('storage/cms/images/products/' . $imageName))->fit(600, 750);
        $image->save();


        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $imageName;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $save = $product->save();
        if ($save) {
            return redirect()->route('product.index')->with('success', 'Product created successfully');
        } else {
            return redirect()->route('product.index')->with('error', 'Product not created');
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
        //

        $product = Product::find($id);
        return view('cms.productControll.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $categories = Category::all();
        return view('cms.productControll.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product)
    {
        //

        if (request()->has('image')) {
            Storage::delete('public/cms/images/products/' . $product->image);
            $imageName = time() . '.' . request()->image->extension();
            request()->image->move(public_path('storage/cms/images/products'), $imageName);
            $image = Image::make(public_path('storage/cms/images/products/' . $imageName))->fit(600, 750);
            $image->save();
            $data = [
                'name' => request()->name,
                'description' => request()->description,
                'image' => $imageName,
                'price' => request()->price,
                'category_id' => request()->category_id,
            ];
            $success = $product->update($data);
            if ($success) {
                return redirect()->route('product.index');
            } else {
                return redirect()->back();
            }
        } else {
            $success = $product->update($this->validateRequest());
            if ($success) {
                return redirect()->route('product.index');
            } else {
                return redirect()->back();
            }
        };
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // //

        $product->image = Storage::delete('public/cms/images/products/' . $product->image);
        $success = $product->delete();
        if ($success) {
            return redirect()->route('product.index');
        } else {
            return redirect()->back();
        }
    }
    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);
    }
}
