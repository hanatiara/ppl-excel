<?php

namespace App\Controllers;

class c_import extends BaseController
{
    public function __construct(){
        helper('form');
    }

    public function importExcel()
    {
        $file = $this->request->getFile('fileexcel');
        $ext = $file->getClientExtension();
        $session = session();

        if($ext == '.xls'){
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        }
        else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }

        $spreadsheet = $reader->load($file);

        $sheet = $spreadsheet->getActiveSheet()->toArray();

        foreach($sheet as $key => $excel) {
            if($key == 0) {
                continue;
            }
            $data_excel[$key] = [
                'id' => $excel['0'],
                'nama' => $excel['1'],
                'harga' => $excel['2'],
                'stok' => $excel['3'],
            ];
        }
        $data = [
            'data' => $data_excel,
        ];
        
		$session->set($data);
        // dd($_SESSION['data']);

		return view('v_barang',$data);
    }
}
