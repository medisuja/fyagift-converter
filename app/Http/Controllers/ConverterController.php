<?php

namespace App\Http\Controllers;

use App\Converter; //File Model
use App\Content; //File Model
use Illuminate\Http\Request;
use Validator;
use Barryvdh\DomPDF\Facade as PDF;

class ConverterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() { }

    public function create(Request $request)
    {
        $status_code = 422;
        $response = ['message' => '', 'data' => null, 'status_code' => $status_code];

        $validator = Validator::make($request->all(), [
            'order_id' => 'required|max:100',
            'name' => 'required|max:100',
            'gender' => 'required||max:10',
            'father_name' => 'required|max:100',
            'mother_name' => 'required|max:100',
            'letter' => 'required',
        ]);

        /* validation */
        if ($validator->fails()) {
            return $this->customValidator($validator->errors(), null);
        }

        if ($request->input('gender') != "boy" && $request->input('gender') != "girl") {
            return $this->customValidator(
                ['The gender field are only allowed with "boy" or "girl" value'],
                null,
                true
            );
        }

        /* validation */
        // check unique order_id
        $unique_order_id = Converter::where('order_id', $request->input('order_id'))->first();
        if (!empty($unique_order_id)) {
            return $this->customValidator(['Duplicate Order ID'], null, true);
        }

        $data = new Converter();
        $data->order_id = $request->input('order_id');
        $data->name = $request->input('name');
        $data->gender = $request->input('gender');
        $data->father_name = $request->input('father_name');
        $data->mother_name = $request->input('mother_name');
        $data->letter = $request->input('letter');
        $save_data = true; // $data->save();

        if (!$save_data) {
            $response['message'] = 'failed to generate link converter, contact the admin';
        } else {
            $status_code = 200;
            $response['message'] = 'success';
            $response['data'] = [
                'order_id' => $data->order_id,
                'download_url' => url('/') . '/converter/to-pdf/' . $data->order_id,
            ];
            $response['status_code'] = $status_code;
        }

        return $this->customResponse($response, $status_code);
    }

    public function toPdf($order_id)
    {
        $data = Converter::where('order_id', $order_id)->first();
        if ((empty($data))) {
            $response = ['message' => 'Data not found', 'data' => null];
            return response()->json($response, 404, [], JSON_PRETTY_PRINT);
        }

        /* $content = Content::where('type', 'boy')->first();
        $html = $content->content; */

         $pdf = PDF::loadView('fyagiftBoy', compact('data'));
         $filename = $order_id . "-fyagift.pdf";
         return $pdf->setPaper('a4', 'landscape')->setWarnings(false)->stream($filename);
    }

    public function customValidator($message = 'Validation error', $data = [], $is_custom = false)
    {
        if (!$is_custom) {
            $message = (array) $message;
            $message = array_flatten(array_splice($message, 0, -1));
        }

        return $this->customResponse([
            'message' => $message[0],
            'data'    => $data,
            'status_code' => 422
        ], 422);
    }

    public function customResponse($data, $status_code, $headers = [])
    {
        return response()->json($data, $status_code, $headers, JSON_PRETTY_PRINT);
    }
}