<?php
class Laporanpdf extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }

    function index()
    {
        $user = array(
            "dasep", "andi", "murry", "febri"
        );

        for ($i = 0; $i < count($user); $i++) {

            //load data library fpdf 
            $pdf =  new FPDF_Protection('P', 'mm', array(90, 150));

            // membuat halaman baru
            $pdf->AddPage();
            //
            $space = "-------------------------------------------------------------------------------------";
            // setting jenis font yang akan digunakan
            $pdf->SetFont('Arial', 'B', 8);
            // mencetak string 
            $pdf->Image('./assets/index.jpg', 7, 8, 30, 'D');
            $pdf->Cell(75, 8, 'SLIP GAJI JUNI ' . date('Y'), 0, 1, 'C');

            // Memberikan space kebawah agar tidak terlalu rapat
            $pdf->Cell(10, 2, '', 0, 1);


            $pdf->SetFont('Arial', '', 7);
            $mahasiswa = $this->db->get('karyawan')->result();


            $pdf->Cell(190, 2, $space, 0, 1, 'D');



            //  $pdf->SetProtection(array('print'), $user[$i]);
            //$pdf->Output();
            //save
           // $pdf->Output('./assets/' . $user[$i] . '.pdf','F');
            $pdf->Output();
        }
    }
}
