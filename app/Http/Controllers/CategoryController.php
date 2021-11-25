<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->getAll();
        return view("backend.category.list", compact("categories"));
    }

    public function destroy($id)
    {
        $this->categoryRepository->delete($id);
        return redirect()->route("categories.list");
    }

    public function create()
    {
        return view("backend.category.create");
    }

    public function store(Request $request)
    {
        $this->categoryRepository->create($request);
        return redirect()->route('categories.list');
    }

    public function show($id)
    {
        $category = $this->categoryRepository->getByid($id);
        return view("backend.category.detail", compact("category"));
    }

    public function edit($id)
    {
        $category = $this->categoryRepository->getById($id);
        return view("backend.category.update", compact("category"));
    }

    public function update(Request $request, $id)
    {
//        dd($request);
        $this->categoryRepository->update($request, $id);
        return redirect()->route("categories.list");
    }
}
