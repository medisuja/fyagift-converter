<?php

namespace App\Http\Controllers;

use App\Converter;
use App\Content;
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

    public function check() {
        echo "OK";
    }

    public function create(Request $request)
    {
        $status_code = 422;
        $response = ['message' => '', 'data' => null, 'status_code' => $status_code];

        /* validation: start */
        $validator = Validator::make($request->all(), [
            'order_id' => 'required|max:100|unique:converter',
            'name' => 'required|max:100',
            'gender' => 'required||max:10',
            'father_name' => 'required|max:100',
            'mother_name' => 'required|max:100',
            'letter' => 'required',
            'cover' => 'required',
        ]);

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

        if ($request->input('cover') != "hard" && $request->input('cover') != "standard") {
            return $this->customValidator(
                ['The cover field are only allowed with "hard" or "standard" value'],
                null,
                true
            );
        }
        /* validation: end */

        $data = new Converter();
        $data->order_id = $request->input('order_id');
        $data->name = $request->input('name');
        $data->gender = $request->input('gender');
        $data->father_name = $request->input('father_name');
        $data->mother_name = $request->input('mother_name');
        $data->letter = $request->input('letter');
        $data->cover = $request->input('cover');

        /* generate PDF */
        $get_file_url = $this->generatePdf($data);
        $data->file_url = $get_file_url;

        if (empty($data->file_url)) {
            $response['message'] = 'failed to generate link converter, contact the admin';
        } else {
            $data->save();
            $status_code = 200;
            $response['message'] = 'success';
            $response['data'] = [
                'order_id' => $data->order_id,
                'file_url' => $data->file_url,
            ];
            $response['status_code'] = $status_code;
        }

        return $this->customResponse($response, $status_code);
    }

    public function generatePdf($data)
    {
        $url = "";

        PDF::setOptions(['dpi' => 300]);
        $pdf = PDF::loadView('fyagiftTemplateConverter', compact('data'));
        $pdf->setPaper([0, 0, 1072.50, 1874], 'landscape');

        // save to storage
        $path = storage_path('pdf');
        $file_name =  $data->order_id . ".pdf";
        $pdf->save($path . '/' . $file_name);

        $file_path = storage_path('pdf') . '/' . $file_name;
        if (file_exists($file_path)) {
            $url = url('/') . '/get-file/' . $data->order_id;
        }
        return $url;
    }

    public function toPdf($order_id)
    {
        $data = Converter::where('order_id', $order_id)->first();
        if ((empty($data))) {
            $response = ['message' => 'Data not found', 'data' => null];
            return response()->json($response, 404, [], JSON_PRETTY_PRINT);
        }

        $pdf = PDF::loadView('fyagiftTemplateHardCover', compact('data'));
        $filename = $order_id . "-fyagift.pdf";

        // return $pdf->setPaper([0, 0, 536.25, 937], 'landscape')->setWarnings(false)->stream($filename);
        return $pdf->setPaper([0, 0, 1328.03, 1505.19])->setWarnings(false)->stream($filename);
    }

    public function standartCover()
    {
        $data = (object) [
            'father_name' => 'Ayah',
            'mother_name' => 'Ibu',
            'name' => 'Iqbal',
            'gender' => 'boy',
            'cover' => 'standard',
        ];

        $pdf = PDF::loadView('fyagiftTemplateStandartCover', compact('data'));
        return $pdf->setPaper([0, 0, 1072.50, 1874], 'landscape')->setWarnings(false)->stream('demo.pdf');
    }

    public function getFileUrl($file_name)
    {
        $file_path = storage_path('pdf') . '/' . $file_name . '.pdf';
        if (file_exists($file_path)) {
            $file = file_get_contents($file_path);
            return response($file, 200)->header('Content-Type', 'application/pdf');;
        }

        $response = ['message' => 'Data not found', 'data' => null];
        return response()->json($response, 404, [], JSON_PRETTY_PRINT);
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
