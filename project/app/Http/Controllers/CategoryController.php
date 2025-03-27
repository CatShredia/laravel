<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Tag;

use App\Services\CategoryService;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $service; // Объявляем свойство $service

    public function __construct(CategoryService $service) // Внедряем сервис
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
    }

    public function adminIndex()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.category', compact('categories', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CategoryRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('admin.category')->with('success', 'Категория успешно создана.');
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
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.category');
    }
}
