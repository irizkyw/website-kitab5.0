<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Books;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Books::all();
        return view('scripture',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public  function detail_scripture(Request $request, $book){
        $books = Books::where('books', $book)->get();
        if (empty($books->first()->API_Gateaway)){
            return response()->json(['error' => 'API Gateaway tidak ditemukan.'], 404);
        }
        $list_chapters = NULL;
        $data_chapter = NULL;

        // Islam
        if ($books->first()->agama == 'Islam') {
            if ($request->is('api/*')) {
                return $this->format_list_chapter_AlQuran($book);
            }
            $list_chapters = $this->format_list_chapter_AlQuran($book);
        }
        // End Islam

        if ($request->has('chapter')) {
            $chapter = $request->query('chapter');
            // Chapter Detail Islam
            if ($books->first()->agama == 'Islam') {
                if ($request->is('api/*')) {
                    return $this->detail_scripture($book);
                }
                $data_chapter = $this->format_DetailChapter_AlQuran($chapter);
            } else {
                return response()->json(['error' => 'Gagal mengambil data chapter.'], $response->status());
            }
            // END Chapter detail Islam
        } 
    
        $data = [
            'religion' => $books->first()->agama,
            'books' => $books,
            'list_chapters' => $list_chapters,
            'data_chapter' => $data_chapter,
        ];
        return view('kitab', compact('data'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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


    /**
     * Format the al-quran data.
     */
    public function format_list_chapter_AlQuran()
    {
        $API = Books::where('agama', 'Islam')->first()->API_Gateaway;
        if (empty($API)){
            return response()->json(['error' => 'API Gateaway tidak ditemukan.'], 404);
        }

        $response = Http::get($API . '/surat');
        if ($response->successful()) {
            $data = $response->json();
            
            $format_data = [];
            foreach ($data['data'] as $key => $value) {
                $format_data[] = [
                    'id' => $value['nomor'],
                    'name' => $value['namaLatin'],
                    'total_verses' => $value['jumlahAyat'],
                    'place' => $value['tempatTurun'],
                    'translation' => $value['arti'],
                ];
            }
            return $format_data;
        }
        return $format_data;
    }

    public function format_DetailChapter_AlQuran($chapter){
        $API = Books::where('agama', 'Islam')->first()->API_Gateaway;
        if (empty($API)){
            return response()->json(['error' => 'API Gateaway tidak ditemukan.'], 404);
        }
        $response = Http::get($API . '/surat/' . $chapter);
        if($response->successful()){
            $chapter = $response->json();
            $format_chapter = [
                'chapter_id' => $chapter['data']['nomor'],
                'chapter_name' => $chapter['data']['namaLatin'],
                'translation' => $chapter['data']['arti'],
                'verses' => $chapter['data']['ayat'],
                'description' => $chapter['data']['deskripsi'],
            ];
            return $format_chapter;
        }
        return $format_chapter;
    }
}
