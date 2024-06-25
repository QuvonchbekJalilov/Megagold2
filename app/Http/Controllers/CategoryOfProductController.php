<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryOfProduct;
use App\Models\Popular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryOfProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */



     public function index(Request $request)
     {
         $productQuery = CategoryOfProduct::query();
         $categories = Category::all();
     
         if ($request->category_id && $request->category_id !== 'all') {
             $productQuery->where('category_id', $request->category_id)->orderBy('id', 'desc')->paginate(20);
         }
     
         $category_of_product = $productQuery->orderBy('id', 'desc')->paginate(20);
     
         return view('admin.category_of_product.index', compact('categories', 'category_of_product', 'request'));
     }
     



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category_of_product.create')->with([
            'products' => CategoryOfProduct::all(),
            'populars' => Popular::all(),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('photo')) {
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post_photo', $name);
        }


        CategoryOfProduct::create([
            'category_id' => $request->category_id,
            'type_id' => $request->type_id,
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en,
            'size' => $request->size,
            'manufacturer' => $request->manufacturer,
            'tonna_metr' => $request->tonna_metr,
            'metr_tonna' => $request->metr_tonna,
            'price' => $request->price,
            'photo' => $path ?? null,
        ]);

        return redirect()->route('category_of_product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryOfProduct $category_of_product)
    {
        return view('admin.category_of_product.show')->with([
            'product' => $category_of_product,
        ]);
    }

    public function edit(CategoryOfProduct $category_of_product)
    {
        $categories = Category::all();
        $populars = Popular::all();
        return view('admin.category_of_product.edit')->with(['product' => $category_of_product, 'categories' => $categories, 'populars' => $populars]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {


        $categoryOfProduct = CategoryOfProduct::findOrFail($id);

        if ($request->hasFile('photo')) {
            if ($categoryOfProduct->photo) {
                Storage::delete('post_photo/' . $categoryOfProduct->photo);
            }
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post_photo', $name);
            $categoryOfProduct->photo = $path;
        }


        $categoryOfProduct->update([
            'category_id' => $request->category_id,
            'type_id' => $request->type_id,
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en,
            'size' => $request->size,
            'manufacturer' => $request->manufacturer,
            'tonna_metr' => $request->tonna_metr,
            'metr_tonna' => $request->metr_tonna,
            'price' => $request->price,
            'photo' => $path ?? $categoryOfProduct->photo,
        ]);

        return redirect()->route('category_of_product.index');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryOfProduct $categoryOfProduct)
    {
        $categoryOfProduct->delete();
        if ($categoryOfProduct->photo) {
            Storage::delete('post_photo/' . $categoryOfProduct->photo);
        }
        return redirect()->route('category_of_product.index');
    }
}
