<?php

namespace Cointavia\PDF;

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class CointaviaPDFController extends Controller
{
    //
    public function generatePDF($fileName,$htmlData)
    {
        $apiKey = config('cointavia-pdf.cointavia_auth_token');
        $response = null;

        try{
            $response = Http::withHeaders([
                'Authorization' => $apiKey,
                'Content-Type' => 'application/json'
            ])->post('https://pdf.cointavia.com/api/v1/generate-PDF', [
                'fileName' =>$fileName,
                'htmlString' => $htmlData,
            ]);
        }
        catch (\Exception $e){
            $response = response()->json(['status'=>420,'error' => 'Server error, Please contact admin@cointavia.com'], 420);
        }


        return $response;
    }
}
