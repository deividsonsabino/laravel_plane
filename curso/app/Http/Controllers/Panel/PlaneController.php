<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Plane;
use App\Models\Brand;
use App\Http\Requests\PlaneStoreUpdateFormRequest;

class PlaneController extends Controller
{
    private $plane;
    protected $totalPage = 2;
    public function __construct(Plane $plane)
    {
        $this->plane = $plane;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planes = $this->plane->with('brand')->paginate($this->totalPage);

        return view('panel.planes.index', compact('planes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::pluck('name', 'id');
        $classes = $this->plane->classes();
        return view('panel.planes.create', compact('classes','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlaneStoreUpdateFormRequest $request)
    {
        $dataForm = $request->all();
        $insert = $this->plane->create($dataForm);
        
        if($insert)
            return redirect()->route('planes.index')->with('success', 'Cadastro realizado com sucesso');
        else
            return redirect()->back()->with('error','Falha ao cadastrar')->withInput();
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands = Brand::pluck('name', 'id');
        $classes = $this->plane->classes();
        $plane = $this->plane->find($id);
        if(!$plane)
            return redirect()->back();
        
        return view('panel.planes.edit', compact('plane','brands','classes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlaneStoreUpdateFormRequest $request, $id)
    {
        $plane = $this->plane->find($id);
        if(!$plane)
            return redirect()->back();
        
        if($plane->update($request->all()))
            return redirect()
                        ->route('planes.index')
                        ->with('success','Sucesso ao editar');
        else 
            return redirect()
                        ->back()
                        ->with('error','Falha ao editar')
                        ->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        $dataForm = $request->except(['_token']);

        $keySearch = $request->key_search;

        $planes = $this->plane->search($keySearch, $this->totalPage);

        return view('panel.planes.index', compact('planes'));
    }
}
