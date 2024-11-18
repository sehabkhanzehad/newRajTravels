<?php

namespace App\Http\Controllers\dashboard\website;

use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function showPackagesPage()
    {
        return view('dashboard.pages.website.package');
    }

    public function  createPackage()
    {
        return view('dashboard.pages.website.package-create');
    }

    public function storePackage(Request $request)
    {
        try {
            $request->validate([
                // 'package_name' => 'required|string|max:255',
                'package_type' => 'required|string',
                'package_price' => 'required|string',
                'currency' => 'required|string|max:3',
                'package_discount' => 'nullable|numeric',
                'discount_type' => 'nullable|string|in:percentage,fixed,none',
                'year' => 'nullable|string',
                'package_duration' => 'nullable|string',
                'package_description' => 'nullable|string',
                'package_image' => 'nullable|image',
                'features' => 'nullable|json',
                'start_date' => 'nullable|date',
                'end_date' => 'nullable|date',
                'package_status' => 'nullable|string|in:active,inactive',
                'visibility' => 'nullable|string|in:public,private',
                'billing_type' => 'nullable|string|in:installment,one-time',
                'is_featured' => 'required|string|in:yes,no',
                'slug' => 'required|string|unique:packages',
            ]);

            $packageImage = $request->file('package_image');

            $imageName = uniqid() . "_package" . "." . $packageImage->getClientOriginalExtension();
            $packageImage->move(public_path('uploads/_package/'), $imageName);
            $imageUrl = asset("/uploads/_package/" . $imageName);

            $package = new Package();
            $package->package_name = $request->package_name;
            $package->locale = $request->locale;
            $package->package_type = $request->package_type;
            $package->package_price = $request->package_price;
            $package->currency = $request->currency;
            $package->package_discount = $request->package_discount;
            $package->discount_type = $request->discount_type;
            $package->year = $request->year;
            $package->package_duration = $request->package_duration;
            $package->package_image = $imageUrl;
            $package->package_short_description = $request->package_short_description;
            $package->package_description = $request->package_description;
            // $package->features = json_encode($request->features);
            $package->features = $request->features;
            $package->start_date = $request->start_date;
            $package->end_date = $request->end_date;
            $package->package_status = $request->package_status;
            $package->visibility = $request->visibility;
            $package->billing_type = $request->billing_type;
            $package->is_featured = $request->is_featured;
            $package->slug = $request->slug;
            $package->save();

            return response()->json([
                'status' => "success",
                'message' => 'Package created successfully',
                'package' => $package,
                'url' => route('dashboard.website.packages')
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => "error",
                'message' => 'Package creation failed',
                'error' => $th->getMessage()
            ]);
        }
    }

    public function getPackages()
    {
        $packages = Package::all();
        return response()->json($packages);
    }

    public function singlePackage(Package $id)
    {
        $package = Package::find($id);
        return response()->json($package);
    }

    public function editPackage($id)
    {
        $package = Package::where('id', $id)->first();
        $package->features = json_decode($package->features, true);

        return view('dashboard.pages.website.package-edit', compact('package'));
    }

    public function updatePackage(Request $request, $id)
    {

        $package = Package::where('id', $id)->first();

        if ($request->hasFile('package_image')) {
            unlink(public_path($package->package_image));

            $packageImage = $request->file('package_image');
            $imageName = uniqid() . "_package" . "." . $packageImage->getClientOriginalExtension();
            $packageImage->move(public_path('uploads/package/'), $imageName);
            $imageUrl = "/uploads/package/" . $imageName;
            $package->package_image = $imageUrl;
        }


        $package->package_name = $request->package_name;
        $package->package_type = $request->package_type;
        $package->package_price = $request->package_price;
        $package->currency = $request->currency;
        $package->package_discount = $request->package_discount;
        $package->discount_type = $request->discount_type;
        $package->year = $request->year;
        $package->package_duration = $request->package_duration;
        $package->package_description = $request->package_description;
        $package->features = $request->features;
        $package->start_date = $request->start_date;
        $package->end_date = $request->end_date;
        $package->package_status = $request->package_status;
        $package->visibility = $request->visibility;
        $package->billing_type = $request->billing_type;
        $package->save();

        return response()->json([
            'status' => "success",
            'message' => 'Package updated successfully',
            'package' => $package,
            'url' => route('dashboard.website.packages')
        ]);
    }

    public function deletePackage($id)
    {
        $package = Package::where('id', $id)->first();
        unlink(public_path($package->package_image));
        $package->delete();

        return response()->json([
            'status' => "success",
            'message' => 'Package deleted successfully',
            'url' => route('dashboard.website.packages')
        ]);
    }
}
