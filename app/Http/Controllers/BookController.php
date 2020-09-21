<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\ModelBook;
use App\User;

class BookController extends Controller
{
    private $user;
    private $book;

    public function __construct()
    {
        $this->user = new User();
        $this->book = new ModelBook();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = $this->book->paginate(5);
        return view('index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->user->all();
        return view('cadastrar', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\BookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $insertBook = $this->book->create([
            'title' => $request->title,
            'pages' => $request->pages,
            'price' => $request->price,
            'id_user' => $request->idUser
        ]);

        if ($insertBook) {
            return redirect('books');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = $this->book->find($id);
        return view('detalhar', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = $this->book->find($id);
        $users = $this->user->all();
        return view('cadastrar', compact('book', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\BookRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $id)
    {
        $updateBook = $this->book->where(['id' => $id])->update([
            'title' => $request->title,
            'pages' => $request->pages,
            'price' => $request->price,
            'id_user' => $request->idUser
        ]);

        if ($updateBook) {
            return redirect('books');
        }        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = $this->book->destroy($id);
        return ($delete) ? "Sim" : "Não";
    }
}
