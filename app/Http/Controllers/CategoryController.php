<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Lấy tất cả danh mục con cháu (descendants)
     */
    private function getAllDescendants($categoryId)
    {
        $descendants = [];
        $children = Category::where('parent_id', $categoryId)->where('is_delete', 0)->get();
        
        foreach ($children as $child) {
            $descendants[] = $child->id;
            $descendants = array_merge($descendants, $this->getAllDescendants($child->id));
        }
        
        return $descendants;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::where('is_delete', 0)->get();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'parent_id' => 'nullable|exists:categories,id',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('categories', 'public');
            $validated['image'] = $imagePath;
        }

        $validated['is_delete'] = 0;
        Category::create($validated);

        return redirect()->route('categories.index')->with('success', 'Thêm danh mục thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        
        // Lấy danh sách tất cả con cháu của category hiện tại
        $descendants = $this->getAllDescendants($category->id);
        
        // Các danh mục không thể chọn: chính nó + tất cả con cháu
        $invalidParentIds = array_merge([$category->id], $descendants);
        
        // Lấy danh sách danh mục có thể chọn làm parent
        $availableParents = Category::where('is_delete', 0)
            ->whereNotIn('id', $invalidParentIds)
            ->get();
        
        return view('admin.category.edit', compact('category', 'availableParents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'parent_id' => 'nullable|exists:categories,id',
            'is_active' => 'nullable|boolean',
        ]);

        // Kiểm tra vòng lặp parent: parent_id không được là chính nó hoặc con cháu của nó
        if (!empty($validated['parent_id'])) {
            $descendants = $this->getAllDescendants($category->id);
            
            if ($validated['parent_id'] == $category->id || in_array($validated['parent_id'], $descendants)) {
                return redirect()->back()
                    ->withInput()
                    ->withErrors(['parent_id' => 'Danh mục cha không thể là chính nó hoặc con cháu của nó']);
            }
        }

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('categories', 'public');
            $validated['image'] = $imagePath;
        }

        $category->update($validated);

        return redirect()->route('categories.index')->with('success', 'Cập nhật danh mục thành công');
    }

    /**
     * Remove the specified resource from storage. (Soft delete)
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->update(['is_delete' => 1]);

        return redirect()->route('categories.index')->with('success', 'Xóa danh mục thành công');
    }
}
