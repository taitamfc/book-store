<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

use App\Http\Requests\Admin\Category\StoreCategoryRequest;
use App\Http\Requests\Admin\Category\UpdateCategoryRequest;

use App\Models\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Category::query(true);

        $q      = $request->q;
        $status = $request->status;
        $sort   = $request->sort;

        if($q){
            $query->where('title','LIKE','%'.$q.'%');
        }

        if($status){
            switch ($status) {
                case 'deactive':
                    $query->where('status',0);
                    break;
                case 'active':
                    $query->where('status',1);
                    break;
            }
        }

        if($sort){
            switch ($sort) {
                case 'id_desc':
                    $query->orderBy('id','DESC');
                    break;
                case 'id_asc':
                    $query->orderBy('id','ASC');
                    break;
            }
        }

        $items = $query->paginate(5);
        $cat_parents = Category::where('parent_id',0)->get();
        $params = [
            'cat_parents'   => $cat_parents,
            'items'         => $items,
            'q'             => $q,
            'status'        => $status,
            'sort'          => $sort,
        ];
        return view('admin.categories.index',$params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat_parents = Category::where('parent_id',0)->get();
        $params = [
            'cat_parents'   => $cat_parents,
        ];
        return view('admin.categories.create',$params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $item = new Category();
        $item->title        = $request->title;
        $item->slug         = Str::slug($request->title);
        $item->status       = $request->status;
        $item->parent_id    = $request->parent_id;

        //handle banner
        if( $request->hasFile('banner') ){
            $fileName = $item->slug.'.'.$request->banner->extension();
            $request->banner->move(public_path('uploads/category'), $fileName);
            $item->banner = '/uploads/category/'.$fileName;
        }

        try {
            $item->save();
            return redirect()->route('categories.index')->with('message','Item saved!')->with('alert-class','success');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()
                    ->back()
                    ->withInput($request->input())
                    ->with('alert-class','danger')
                    ->with('message','Can not save item');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Category::find($id);
        $cat_parents = Category::where('parent_id',0)->where('id','!=',$id)->get();
        $params = [
            'cat_parents'   => $cat_parents,
            'item'          => $item,
        ];
        return view('admin.categories.edit',$params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        $item = Category::find($id);
        $item->title        = $request->title;
        $item->slug         = Str::slug($request->title);
        $item->status       = $request->status;
        $item->parent_id    = $request->parent_id;

        //handle banner
        if( $request->hasFile('banner') ){
            $fileName = $item->slug.'.'.$request->banner->extension();
            $request->banner->move(public_path('uploads/category'), $fileName);
            $item->banner = '/uploads/category/'.$fileName;
        }

        try {
            $item->save();
            return redirect()->route('categories.index')->with('message','Item saved!')->with('alert-class','success');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withInput($request->input())->with('alert-class','danger')
            ->with('message','Can not save item');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $category = Category::find($id);
            $category->delete();
            return redirect()->route('categories.index')->with('message','Item deleted!')->with('alert-class','success');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withInput($request->input())
            ->with('alert-class','danger')
            ->with('message','Can not delete item');
        }
    }
}
