<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Saleadd;

class SaleaddController extends Controller
{
    protected $saleadd;
    public function __construct(){
        $this->saleadd = new Saleadd();
        
    }
    public function index()
    {
        return $this->saleadd->all();
     
    }
    
    public function store(Request $request)
    {
     return $this->saleadd->create($request->all());
           
    }
  
    public function show(string $id)
    {
     return $saleadd = $this->saleadd->find($id);  
    }
    public function update(Request $request, string $id)
    {
         $saleadd = $this->saleadd->find($id);
         $saleadd->update($request->all());
         return $saleadd;
    }
    public function destroy(string $id)
    {
     $saleadd = $this->saleadd->find($id);
    return $saleadd->delete();   
    }
}

// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(string $id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, string $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(string $id)
//     {
//         //
//     }
// }
