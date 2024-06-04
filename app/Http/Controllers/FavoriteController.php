<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Books;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class FavoriteController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    if (!$request->from) {
        return response()->json(['message' => 'User not found'], 404);
    }
    $user = User::find($request->from);
    if (!$user) {
        return response()->json(['message' => 'User not found'], 404);
    }

    $book = Books::where('agama', $request->religion)->first();
    if (!$book) {
        return response()->json(['message' => 'Book not found'], 404);
    }

    $data = [
        'book_id' => $book->id,
        'user_id' => $request->from,
        'pasal' => isset($request->pasal) ? $request->pasal : null,
        'chapter' => $request->chapter,
        'ayat' => $request->verse,
    ];

    $favorite = Favorite::where('book_id', $data['book_id'])
                        ->where('user_id', $data['user_id'])
                        ->where('pasal', $data['pasal'])
                        ->where('chapter', $data['chapter'])
                        ->where('ayat', $data['ayat'])
                        ->first();

    if ($favorite) {
        $favorite->delete();
        $message = 'Favorite removed successfully.';
    } else {
        $favorite = Favorite::create($data);
        $message = 'Favorite created successfully.';
    }

    if ($request->is('api/*')) {
        return response()->json(['message' => $message, 'favorite' => $favorite], 201);
    }

    return redirect()->route('favorite.showByUser', ['user_id' => $request->from])->with('success', $message);
}


    //show favorite by id
    public function show(string $id)
    {
        $favorite = Favorite::find($id);
        if (!$favorite) {
            return response()->json(['message' => 'Favorite not found'], 404);
        }
        return response()->json($favorite);
    }

    /**
     * Display the specified resource.
     */
    public function showByUser(string $user_id)
    {
        //initiate empty array
        $list_favorite = [];
        $al_quran = [];
        $alkitab = [];

        //Check if favorite exists
        $favorite = Favorite::where('user_id', $user_id)->get();
        if ($favorite->isEmpty()) {
            return response()->json(['message' => 'Favorite not found'], 404);
        }

        //Loop through favorite
        foreach ($favorite as $fav) {
            //Find Book
            $book = Books::find($fav->book_id);
            if (!$book) {
                return response()->json(['message' => 'Book not found'], 404);
            }

            //Check the type of Book
            if (strtolower($book->books) == 'al-quran') {
                //check if chapter exists; if not then get from API
                if(array_key_exists($fav->chapter, $al_quran)){
                    $list_favorite[] = [
                        'id' => $fav->id,
                        'Book' => $book->books,
                        'Chapter' => $al_quran[$fav->chapter]['data']['namaLatin'],
                        'Ayat' => $al_quran[$fav->chapter]['data']['ayat'][$fav->ayat-1]
                    ];
                }else{
                    $response = Http::get($book->API_Gateaway . '/surat/' . $fav->chapter);
                    $al_quran[$fav->chapter] = $response;
                    $list_favorite[] = [
                        'id' => $fav->id,
                        'Book' => $book->books,
                        'Chapter' => $response['data']['namaLatin'],
                        'Ayat' => $response['data']['ayat'][$fav->ayat-1]
                    ];
                }
            }
        }
        return response()->json($list_favorite);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd($id);
        $favorite = Favorite::find($id);
        $favorite->delete();

        return redirect()->route('favorite.showByUser', ['user_id' => $favorite->user_id])->with('success', 'Favorite deleted successfully.');
    }

    public function create()
    {
        return view('favorites.create');
    }
}
