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
            // $packageImage->resize(176, 348);


            if ($packageImage) {
                $imageName = uniqid() . "_package" . "." . $packageImage->getClientOriginalExtension();
                $packageImage->move(public_path('uploads/package/'), $imageName);
                $imageUrl = asset("uploads/package/" . $imageName);
            }

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


    public function showPackage(Package $slug)
    {
        $package = Package::where('slug', $slug)->firstOrFail();
        return view('dashboard.pages.website.package-show', compact('package'));
    }











    // public function updatePackage(Request $request, Package $package)
    // {
    //     $request->validate([
    //         'package_name' => 'required|string|max:255',
    //         'package_type' => 'required|string',
    //         'package_price' => 'required|numeric',
    //         'currency' => 'required|string|max:3',
    //         'package_discount' => 'nullable|numeric',
    //         'discount_type' => 'nullable|string|in:percentage,fixed',
    //         'year' => 'nullable|string',
    //         'package_duration' => 'nullable|string',
    //         'package_description' => 'nullable|string',
    //         'package_image' => 'nullable|image',
    //         'features' => 'nullable|json',
    //         'start_date' => 'nullable|date',
    //         'end_date' => 'nullable|date',
    //         'package_status' => 'nullable|string|in:active,inactive',
    //         'visibility' => 'nullable|string|in:public,private',
    //         'billing_type' => 'nullable|string|in:recurring,one-time',
    //         'slug' => 'required|string|unique:packages,slug,' . $package->id,
    //     ]);

    //     $package->package_name = $request->package_name;
    //     $package->package_type = $request->package_type;
    //     $package->package_price = $request->package_price;
    //     $package->currency = $request->currency;
    //     $package->package_discount = $request->package_discount;
    //     $package->discount_type = $request->discount_type;
    //     $package->year = $request->year;
    //     $package->package_duration = $request->package_duration;
    //     $package->package_description = $request->package_description;
    //     $package->features = json_encode($request->features);
    //     $package->start_date = $request->start_date;
    //     $package->end_date = $request->end_date;
    //     $package->package_status = $request->package_status;
    //     $package->visibility = $request->visibility;
    //     $package->billing_type = $request->billing_type;
    //     $package->slug = $request->slug;
    //     $package->save();

    //     return redirect()->route('dashboard.website.packages')->with('success', 'Package updated successfully');
    // }

    // public function deletePackage(Package $package)
    // {
    //     $package->delete();
    //     return redirect()->route('dashboard.website.packages')->with('success', 'Package deleted successfully');
    // }

    // public function showPackage(Package $package)
    // {
    //     return view('dashboard.pages.website.package-show', compact('package'));
    // }

    // public function editPackage(Package $package)
    // {
    //     return view('dashboard.pages.website.package-edit', compact('package'));
    // }

    // public function showPackageFeatures(Package $package)
    // {
    //     return view('dashboard.pages.website.package-features', compact('package'));
    // }

    // public function storePackageFeature(Request $request, Package $package)
    // {
    //     $request->validate([
    //         'feature_name' => 'required|string|max:255',
    //         'feature_description' => 'nullable|string',
    //     ]);

    //     $feature = [
    //         'feature_name' => $request->feature_name,
    //         'feature_description' => $request->feature_description,
    //     ];

    //     $features = json_decode($package->features, true);
    //     $features[] = $feature;

    //     $package->features = json_encode($features);
    //     $package->save();

    //     return redirect()->route('dashboard.website.packages.features', $package)->with('success', 'Feature added successfully');
    // }

    // public function deletePackageFeature(Package $package, $feature)
    // {
    //     $features = json_decode($package->features, true);
    //     unset($features[$feature]);
    //     $package->features = json_encode($features);
    //     $package->save();

    //     return redirect()->route('dashboard.website.packages.features', $package)->with('success', 'Feature deleted successfully');
    // }

    // public function editPackageFeature(Package $package, $feature)
    // {
    //     $features = json_decode($package->features, true);
    //     $feature = $features[$feature];
    //     return view('dashboard.pages.website.package-feature-edit', compact('package', 'feature'));
    // }

    // public function updatePackageFeature(Request $request, Package $package, $feature)
    // {
    //     $request->validate([
    //         'feature_name' => 'required|string|max:255',
    //         'feature_description' => 'nullable|string',
    //     ]);

    //     $features = json_decode($package->features, true);
    //     $features[$feature] = [
    //         'feature_name' => $request->feature_name,
    //         'feature_description' => $request->feature_description,
    //     ];

    //     $package->features = json_encode($features);
    //     $package->save();

    //     return redirect()->route('dashboard.website.packages.features', $package)->with('success', 'Feature updated successfully');
    // }

    // public function showPackageImages(Package $package)
    // {
    //     return view('dashboard.pages.website.package-images', compact('package'));
    // }

    // public function storePackageImage(Request $request, Package $package)
    // {
    //     $request->validate([
    //         'package_image' => 'required|image',
    //     ]);

    //     $package->addMedia($request->file('package_image'))->toMediaCollection('package_images');

    //     return redirect()->route('dashboard.website.packages.images', $package)->with('success', 'Image added successfully');
    // }

    // public function deletePackageImage(Package $package, Media $image)
    // {
    //     $image->delete();

    //     return redirect()->route('dashboard.website.packages.images', $package)->with('success', 'Image deleted successfully');
    // }

    // public function editPackageImage(Package $package, Media $image)
    // {
    //     return view('dashboard.pages.website.package-image-edit', compact('package', 'image'));
    // }

    // public function updatePackageImage(Request $request, Package $package, Media $image)
    // {
    //     $request->validate([
    //         'package_image' => 'required|image',
    //     ]);

    //     $image->delete();
    //     $package->addMedia($request->file('package_image'))->toMediaCollection('package_images');

    //     return redirect()->route('dashboard.website.packages.images', $package)->with('success', 'Image updated successfully');
    // }

    // public function showPackageImage(Package $package, Media $image)
    // {
    //     return view('dashboard.pages.website.package-image-show', compact('package', 'image'));
    // }

    // public function showPackageImageEdit(Package $package, Media $image)
    // {
    //     return view('dashboard.pages.website.package-image-edit', compact('package', 'image'));
    // }

    // public function updatePackageImage(Request $request, Package $package, Media $image)
    // {
    //     $request->validate([
    //         'package_image' => 'required|image',
    //     ]);

    //     $image->delete();
    //     $package->addMedia($request->file('package_image'))->toMediaCollection('package_images');

    //     return redirect()->route('dashboard.website.packages.images', $package)->with('success', 'Image updated successfully');
    // }
}
