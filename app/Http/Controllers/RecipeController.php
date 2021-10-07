<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('recipes.index',
            ['recipes'=> Recipe::paginate(5)
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'preparation_time'=>'required',
            'total_price'=>'required',
            'vegetarian'=>'required',
        ]);

        Recipe::create([
            'name'=>$request->name,
            'preparation_time'=>$request->preparation_time,
            'url'=>$request->url,
            'total_price'=>$request->total_price,
            'vegetarian'=>$request->vegetarian
        ]);

        return redirect('/recipes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', ['recipe'=>$recipe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Recipe $recipe)
    {

        request()->validate([
           'name'=>'required',
           'preparation_time'=>'required',
           'total_price'=>'required',
           'vegetarian'=>'required',
        ]);


        $recipe->update([
            'name'=>request('name'),
            'preparation_time'=>request('preparation_time'),
            'url'=>request('url'),
            'total_price'=>request('total_price'),
            'vegetarian'=>request('vegetarian')
        ]);

        return redirect('/recipes');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return redirect('/recipes');
    }
}
