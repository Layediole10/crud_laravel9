<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::orderBy('first_name', 'asc')->paginate(5);
        return view('author.authorList', ['authors' => $authors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('author.authorForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' =>'Required',
            'last_name' =>'Required',
        ]);

        Author::create([
            'first_name' =>$request->first_name,
            'last_name' =>$request->last_name,
        ]);
        // $alert = 'operation completed successfully!';
        // return view('author.alertAuthor', ['alert' => $alert]);

        return back()->with('success', 'operation completed successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        return view('author.editAuthor', ['author' => $author]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        $request->validate([
            'first_name' =>'Required',
            'last_name' =>'Required',
        ]);
        
        $author->update([
            'first_name' =>$request->first_name,
            'last_name' =>$request->last_name,
        ]);
        // $alert = 'operation completed successfully!';
        // return view('author.alertAuthor', ['alert' => $alert]);

        return back()->with('success', 'Author updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        $fullName = $author->first_name." ".$author->last_name;
        $author->delete();

        return back()->with('successDelete', 'L\'author '.$fullName.' deleted successfully!');
    }


    public function search()
    {
        $input = request()->input('q');
        $result = Author::where('first_name', 'like', "%$input%")->orwhere('last_name', 'like', "%$input%")->paginate(5); 

        return view('author.searchAuthor', ['result' => $result]);
    }
}
