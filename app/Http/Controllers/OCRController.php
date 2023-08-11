<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use thiagoalessio\TesseractOCR\TesseractOCR;
class OCRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function performOCR($imagePath, $language = 'eng') {
        $tesseract = new \TesseractOCR($imagePath);
        $tesseract->lang($language);
        return $tesseract->run();
    }
    public function index()
    {
        $extractedText="";
        return view('welcome', ['text' => $extractedText]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ocr(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // $imagePath = $request->file('image')->getRealPath();
        // $extractedText = \OCR::scan($imagePath); 
        // dd($imagePath);
        // $this->performOCR($imagePath);

        $image = $request->file('image');
    $filename= date('YmdHi').$image->getClientOriginalName();
    $image-> move(public_path('images'), $filename);

    $ocr = new TesseractOCR(public_path("images/$filename"));
    $ocr->lang('eng');
    $text = $ocr->run();


        return view('welcome', ['text' => $text]);
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
