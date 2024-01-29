<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//write excel
require_once 'application/third_party/Spout/Autoloader/autoload.php';
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;
use Box\Spout\Writer\Common\Creator\Style\StyleBuilder;
use Box\Spout\Common\Entity\Style\Color;
use Box\Spout\Common\Entity\Style\Border;
use Box\Spout\Writer\Common\Creator\Style\BorderBuilder;

require_once APPPATH.'third_party/PHPExcel_/PHPExcel.php';


class Export extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('auth/login');
        }
        
		$this->load->model(array('Tagihan_model','Invoice_model','Project_model'));
		
	}
	
    public function export_project(){
        
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array('No','Pelanggan','No. Wo', 'Nama Project', 'Kode Project', 'Start Date', 'End Date', 'Node', 'Tagihan', 'Nominal');

        $column = 0;

        foreach($table_columns as $field)
        {
            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
            $column++;
        }

        $sess = $this->session->userdata();

        $data = $this->Project_model->get_project();

        $excel_row = 2;
        $nomor=1;
        foreach($data as $v)
        {
            $jumlah_node = $this->Project_model->getJumlahNode($v->project_id)->jumlah_node;
            $tag         = $this->Tagihan_model->getJumlahTagihan($v->project_id);

            $bulan_tertagih = $tag->bulan_tertagih?$tag->bulan_tertagih+1:0;
            $jumlah_bulan   = $tag->jumlah_bulan?$tag->jumlah_bulan+1:0;
            
            $tagihan = $bulan_tertagih."/".$jumlah_bulan." bln";

            $nominal = "Rp. ".number_format($tag->biaya_tertagih,0,',','.')." / Rp. ".number_format($tag->jumlah_biaya,0,',','.');

            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $nomor);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $v->nama_alias);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $v->no_wo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $v->nama_project);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $v->kode_project);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, date('j F Y', strtotime($v->start_date)));
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, date('j F Y', strtotime($v->end_date)));
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $jumlah_node);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $tagihan);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $nominal);
            $excel_row++;
            $nomor++;
        }

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
        
        $sqlViewName = "Report Project";
        $sqlViewName = str_replace(' ','-',$sqlViewName);

        //Strip character spesial
        $sqlViewName = preg_replace('/[^A-Za-z0-9\-]/', '', $sqlViewName);

        $namaFile = $sqlViewName.'_'.date('Ymd').'.xls';
       
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename='.$namaFile);
        $object_writer->save('php://output');

       

    }
    public function export_invoice(){
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array('No.', 'No.Invoice', 'No. Wo', 'Nama Project','Tanggal Invoice', 'Tanggal Jatuh Tempo','Rekening Bank', 'Nominal','Status');

        $column = 0;

        foreach($table_columns as $field)
        {
            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
            $column++;
        }

        $sess = $this->session->userdata();

        $data = $this->Invoice_model->get_invoice_all();

        $excel_row = 2;
        $nomor=1;
        foreach($data as $v)
        {
            $bank = $v->nama_bank." - ".$v->no_rekening;
            if($v->is_approved=='1'){
                $status = "Approved";
            }else{
                $status = "Pending";
            }


            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $nomor);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $v->no_invoice);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $v->no_wo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $v->nama_project);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, date('j F Y', strtotime($v->tgl_invoice)));
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, date('j F Y', strtotime($v->tgl_jthtempo)));
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $bank);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $v->nominal);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $status);
            $excel_row++;
            $nomor++;
        }

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
        
        $sqlViewName = "Report Invoice";
        $sqlViewName = str_replace(' ','-',$sqlViewName);

        //Strip character spesial
        $sqlViewName = preg_replace('/[^A-Za-z0-9\-]/', '', $sqlViewName);

        $namaFile = $sqlViewName.'_'.date('Ymd').'.xls';
       
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename='.$namaFile);
        $object_writer->save('php://output');

    }

    public function project() {

        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', 0);

        $sess = $this->session->userdata();

        $data = $this->Project_model->get_project();
        //print_r($data);die;
        //ambil data  (begin)
        $dataList = $data;

        $dataKolom = $data;

        //generate nama file excel
        $sqlViewName = "Report Project";
        $sqlViewName = str_replace(' ','-',$sqlViewName);

        //Strip character spesial
        $sqlViewName = preg_replace('/[^A-Za-z0-9\-]/', '', $sqlViewName);

        $writer = WriterEntityFactory::createXLSXWriter();
        $namaFile = $sqlViewName.'_'.date('Ymd').'.xlsx';
        $filePath = 'file_manager/download/'.$namaFile;
        $writer->openToFile($filePath);

        $defaultStyle = (new StyleBuilder())
            ->setFontName('Arial')
            ->setFontSize(11)
            ->setShouldWrapText(false)
            ->build();
        $writer->setDefaultRowStyle($defaultStyle)
            ->openToFile($filePath);

        $borderDefa = (new BorderBuilder())
            ->setBorderBottom(Color::BLACK, Border::WIDTH_THIN, Border::STYLE_SOLID)
            ->setBorderTop(Color::BLACK, Border::WIDTH_THIN, Border::STYLE_SOLID)
            ->setBorderRight(Color::BLACK, Border::WIDTH_THIN, Border::STYLE_SOLID)
            ->setBorderLeft(Color::BLACK, Border::WIDTH_THIN, Border::STYLE_SOLID)
            ->build();

        $styleTitle = (new StyleBuilder())
            ->setFontBold()
            ->setFontSize(12)
            ->setFontColor(Color::BLUE)
            ->build();

       
        //style
        $styleHeader = (new StyleBuilder())
            ->setFontColor(Color::WHITE)
            ->setBorder($borderDefa)
            ->setBackgroundColor(Color::GREEN)
            ->build();
   
        $writer->addRow(WriterEntityFactory::createRowFromArray(['REPORT DATA PROJECT'],$styleTitle));
        $writer->addRow(WriterEntityFactory::createRowFromArray(["Exported By : ".$sess['karyawan']['nama']],$styleTitle));
        $writer->addRow(WriterEntityFactory::createRowFromArray(["Date : ".date('Y-m-d H:i')],$styleTitle));
    
        $dataHeader = array(
            'No.', 'Pelanggan', 'No. Wo', 'Nama Project','Kode Project', 'Start Date','End Date', 'Node','Tagihan','Nominal'
        );

        //row header
        $rowHeader = WriterEntityFactory::createRowFromArray($dataHeader, $styleHeader);
        $writer->addRow($rowHeader);

        $styleData = (new StyleBuilder())
            ->setBorder($borderDefa)
            ->build();

        $styleFormatAngka = (new StyleBuilder())
            ->setBorder($borderDefa)
            ->setFormat('0')
            ->build();

        $styleFormatTanggal = (new StyleBuilder())
            ->setBorder($borderDefa)
            ->setFormat('d-mmm-YY')
            ->build();

        $no = 1;
        //row data
        foreach($dataList as $k=>$v){
            $cells = array();

            $jumlah_node = $this->Project_model->getJumlahNode($v->project_id)->jumlah_node;
			$tag 	 	 = $this->Tagihan_model->getJumlahTagihan($v->project_id);

			$bulan_tertagih = $tag->bulan_tertagih?$tag->bulan_tertagih+1:0;
            $jumlah_bulan 	= $tag->jumlah_bulan?$tag->jumlah_bulan+1:0;
            
            $tagihan = $bulan_tertagih."/".$jumlah_bulan." bln";

            $nominal = "Rp. ".number_format($tag->biaya_tertagih,0,',','.')." / Rp. ".number_format($tag->jumlah_biaya,0,',','.');

            $cells = [
                WriterEntityFactory::createCell((float) $no, $styleFormatAngka),
                
                WriterEntityFactory::createCell( $v->nama_alias, $styleData),
                WriterEntityFactory::createCell( $v->no_wo, $styleData),
                WriterEntityFactory::createCell( $v->nama_project, $styleData),
                WriterEntityFactory::createCell( $v->kode_project, $styleData),
                WriterEntityFactory::createCell( $v->start_date, $styleData),
                WriterEntityFactory::createCell( $v->end_date, $styleData),
                WriterEntityFactory::createCell( $jumlah_node, $styleFormatAngka),
                WriterEntityFactory::createCell( $tagihan, $styleData),
                WriterEntityFactory::createCell( $nominal, $styleData),
                
            ];

            $rowData = WriterEntityFactory::createRow($cells);
            $writer->addRow($rowData);
            $no++;
        }

        $writer->close();

        $filenya =  'file_manager/download/'.$namaFile;
    
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$namaFile);
        header('Cache-Control: max-age=0');
        readfile($filenya);
        exit;
        
    }

    public function invoice() {

        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', 0);

        $sess = $this->session->userdata();

        $data = $this->Invoice_model->get_invoice_all();
        //print_r($data);die;
        //ambil data  (begin)
        $dataList = $data;

        $dataKolom = $data;

        //generate nama file excel
        $sqlViewName = "Report Invoice";
        $sqlViewName = str_replace(' ','-',$sqlViewName);

        //Strip character spesial
        $sqlViewName = preg_replace('/[^A-Za-z0-9\-]/', '', $sqlViewName);

        $writer = WriterEntityFactory::createXLSXWriter();
        $namaFile = $sqlViewName.'_'.date('Ymd').'.xlsx';
        $filePath = 'file_manager/download/'.$namaFile;
        $writer->openToFile($filePath);

        $defaultStyle = (new StyleBuilder())
            ->setFontName('Arial')
            ->setFontSize(11)
            ->setShouldWrapText(false)
            ->build();
        $writer->setDefaultRowStyle($defaultStyle)
            ->openToFile($filePath);

        $borderDefa = (new BorderBuilder())
            ->setBorderBottom(Color::BLACK, Border::WIDTH_THIN, Border::STYLE_SOLID)
            ->setBorderTop(Color::BLACK, Border::WIDTH_THIN, Border::STYLE_SOLID)
            ->setBorderRight(Color::BLACK, Border::WIDTH_THIN, Border::STYLE_SOLID)
            ->setBorderLeft(Color::BLACK, Border::WIDTH_THIN, Border::STYLE_SOLID)
            ->build();

        $styleTitle = (new StyleBuilder())
            ->setFontBold()
            ->setFontSize(12)
            ->setFontColor(Color::BLUE)
            ->build();

       
        //style
        $styleHeader = (new StyleBuilder())
            ->setFontColor(Color::WHITE)
            ->setBorder($borderDefa)
            ->setBackgroundColor(Color::GREEN)
            ->build();
   
        $writer->addRow(WriterEntityFactory::createRowFromArray(['REPORT DATA INVOICE'],$styleTitle));
        $writer->addRow(WriterEntityFactory::createRowFromArray(["Exported By : ".$sess['karyawan']['nama']],$styleTitle));
        $writer->addRow(WriterEntityFactory::createRowFromArray(["Date : ".date('Y-m-d H:i')],$styleTitle));
    
        $dataHeader = array(
            'No.', 'No.Invoice', 'No. Wo', 'Nama Project','Tanggal Invoice', 'Tanggal Jatuh Tempo','Rekening Bank', 'Nominal','Status'
        );

        //row header
        $rowHeader = WriterEntityFactory::createRowFromArray($dataHeader, $styleHeader);
        $writer->addRow($rowHeader);

        $styleData = (new StyleBuilder())
            ->setBorder($borderDefa)
            ->build();

        $styleFormatAngka = (new StyleBuilder())
            ->setBorder($borderDefa)
            ->setFormat('0')
            ->build();

        $styleFormatTanggal = (new StyleBuilder())
            ->setBorder($borderDefa)
            ->setFormat('d-mmm-YY')
            ->build();

        $no = 1;
        //row data
        foreach($dataList as $k=>$v){
            $cells = array();
            $bank = $v->nama_bank." - ".$v->no_rekening;
            if($v->is_approved=='1'){
                $status = "Approved";
            }else{
                $status = "Pending";
            }
            $cells = [
                WriterEntityFactory::createCell((float) $no, $styleFormatAngka),
                
                WriterEntityFactory::createCell( $v->no_invoice, $styleData),
                WriterEntityFactory::createCell( $v->no_wo, $styleData),
                WriterEntityFactory::createCell( $v->nama_project, $styleData),
                WriterEntityFactory::createCell( $v->tgl_invoice, $styleData),
                WriterEntityFactory::createCell( $v->tgl_jthtempo, $styleData),
                WriterEntityFactory::createCell( $bank, $styleData),
                WriterEntityFactory::createCell( $v->nominal, $styleFormatAngka),
                WriterEntityFactory::createCell( $status, $styleData),
                
            ];

            $rowData = WriterEntityFactory::createRow($cells);
            $writer->addRow($rowData);
            $no++;
        }

        $writer->close();

        $filenya =  'file_manager/download/'.$namaFile;
    
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$namaFile);
        header('Cache-Control: max-age=0');
        readfile($filenya);
        exit;
        
    }


}