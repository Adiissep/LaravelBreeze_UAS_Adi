<?php

namespace App\Http\Controllers;
use App\Models\Companies as ModelCompanies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;


class CompaniesController extends Controller
{
    public function index()
    {
        $companies = ModelCompanies::when(request('query'), function ($qy) {
            return $qy->where('name', 'like', '%' . request('query') . '%');
        })
            ->paginate(5);
        return view('companies.index', compact('companies'));

        $post = ModelCompanies::with('user')->get();
        return view('dashboard', ['dashboard' => $post]);

    }
    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | unique:companies',
            'company_image' => 'required | image | mimetypes:image/png,image/jpg,image/jpeg,image/webp,image/svg+xml,text/plain | max:2048' // 2MB
            
        ]);


        if ($request->company_image) {
            $imgName = time() . '.' . $request->company_image->extension(); // .png, .jpg
            $request->company_image->storeAs('media/companies/', $imgName, 'public');
        }

        ModelCompanies::create([
            'name' => $request->name,
            'company_image' => $imgName,
            'user_id_company' => auth()->id(),
            
        ]);


        return redirect()->route('companies.index')->with('success', 'Companies created successfully');
    }

    public function show()
    {
        // $company = ModelCompanies::all();
        // return view('layouts.uts-layout',compact('company'));

        
    }

    public function edit(ModelCompanies $company)
    {
        return view('companies.edit', compact('company'));
    }

    public function update(Request $request, ModelCompanies $company)
    {
        $request->validate([
            'name' => 'required | unique:companies,name,' . $company->id,
            'company_image' => 'nullable | image | mimetypes:image/png,image/jpg,image/jpeg,image/webp,image/svg+xml,text/plain | max:2048' // 1MB
        ]);

        if ($request->company_image) {
            // Delete old image
            Storage::disk('public')->delete('media/companies/' . $company->company_image);

            $imgName = time() . '.' . $request->company_image->extension(); // .png, .jpg
            $request->company_image->storeAs('media/companies/', $imgName, 'public');
        }

        $company->update([
            'name' => $request->name,
            'company_image' => $request->company_image ? $imgName : $company->company_image,
        ]);

        return redirect()->route('companies.index')->with('success', 'companies updated successfully');
    }


    public function destroy(ModelCompanies $company)
    {
        $company->delete();
        Storage::disk('public')->delete('media/companies/' . $company->company_image);

        return redirect()->route('companies.index')->with('success', 'Companies deleted successfully');
    }
}
