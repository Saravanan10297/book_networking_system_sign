<?php

namespace App\Http\Controllers;

use App\Models\BooklistModel;
use App\Models\BookModel;
use Illuminate\Http\Request;
use PHPUnit\Framework\SkippedWithMessageException;

class Bookdetails extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Bookmodel::orderBy('id','desc')->Paginate(2);
         return view('Index',compact('data'));
    }
  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }
    public function listofBooks()
    {
        return view('Addpersonal');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $date=$request->except('_token');
        BookModel::create($date);

        return redirect()->route('Books.create')->withMessage('Books has been created successfully!');


    }
    public function storelist(Request $request)
    {
        
        $request->validate([
            'Bookname'=>'required',
         ]);
        
        $date=$request->except('_token');
      
        BooklistModel::create($date);
        $list=BooklistModel::all();

       return view('Add');

    }
        
    //     $date=$request->except('_token');
    //     BookModel::create($date);
    // }

    /**
     * Display the specified resource.
     */
    public function search(Request $request)
    {
   
        $query = $request->input('query');

        $data = BookModel::where('Bookname', 'LIKE', "%$query%")
                     ->orWhere('ISBN', 'LIKE', "%$query%")
                     ->paginate(3);
        

        return view('index', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
