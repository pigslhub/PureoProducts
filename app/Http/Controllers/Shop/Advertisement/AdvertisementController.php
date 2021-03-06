<?php

namespace App\Http\Controllers\Shop\Advertisement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Advertisement;

class AdvertisementController extends Controller
{
    public function index()
    {
        $advertisements = Advertisement::all();
        return view('shop.advertisement.index', compact('advertisements'));
    }

    public function create()
    {
        return view('shop.advertisement.create');
    }

    public function store(Request $request)
    {
        $advertisement = Advertisement::create($request->except('image'));
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('attachments/advertisements/image', 'public');
            $advertisement->update([
                'image' => $image_path,
            ]);
        }

        return redirect(route('advertisements.index'))->with('success', 'Advertisement Created Successfully');
    }

    public function show(Advertisement $advertisement)
    {
        return view('shop.advertisement.show', compact('advertisement'));
    }

    public function edit(Advertisement $advertisement)
    {
        return view('shop.advertisement.edit', compact('advertisement'));
    }

    public function update(Request $request, Advertisement $advertisement)
    {
        $advertisement->update($request->except('image'));
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('attachments/advertisements/image', 'public');
            $advertisement->update([
                'image' => $image_path,
            ]);
        }
        return redirect(route('advertisements.index'))->with('success', 'Advertisement Updated Successfully');
    }

    public function destroy(Advertisement $advertisement)
    {
        $advertisement->delete();
        return redirect()->back()->with('success', 'Advertisement Deleted Successfully');
    }
}
