<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.departments.index')->only('index');
        $this->middleware('can:admin.departments.create')->only('create');
        $this->middleware('can:admin.departments.edit')->only('edit');
    }
    public function index():View
    {
        return view('departments.index');
    }

    public function create():View
    {
        return view('departments.create');
    }

    public function store(StoreDepartmentRequest $request)
    {
        Department::create($request->validated());
        return redirect()->route('departments.index')->with(['message' => 'Departamento Guardado', 'typo' => 'success']);
    }

    public function edit(Department $department):View
    {
        return view('departments.edit', compact('department'));
    }

    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        $department->update($request->validated());
        return redirect()->route('departments.index')->with(['message' => 'Departamento Actualizado', 'typo' => 'success']);
    }
}
