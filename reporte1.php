<?php
include "core/autoload.php";
include "core/modules/index/model/ConfigData.php";
include "core/modules/index/model/OperationData.php";
// include "core/modules/index/model/ClienteData.php";
include "core/modules/index/model/VehiculoData.php";
include "core/modules/index/model/AccionData.php";
include "core/modules/index/model/ActividadData.php";
include "core/modules/index/model/ProcesosData.php";
class PDF extends FPDF
{
// Cargar los datos
function LoadData($file)
{

    // Leer las líneas del fichero
}

function Header()
{
// $id_empresa = ConfigData::getById("id_empresa")->val;
    $service = OperationData::getById($_GET["id_operacion"]);
        $this->SetFont('Arial','B',15);
        $this->setX(30);
        $this->SetFont('Arial','B',20);
        $this->Cell( 5, 5, "Santa Rosa", 0, 0, 'L', false );

        $this->Ln();
        $this->setY(7);
        $this->SetFont('Arial','B',10);
        $this->setX(165-5);
}
// Tabla simple
function ImprovedTable($data)
{
    $service = OperationData::getById($_GET["id_operacion"]);
    $this->setY(31);
        $this->setX(20);
        $this->setY(31);
        $this->setX(20);
        $this->SetFont('Arial','B',8);
        $this->setY(33);
        $this->setX(20);
        $this->setY(40);
        $this->setX(20);
        $this->SetFont('Arial','B',8);
//         $this->Cell(0,35,"",1);
        $this->setY(12);
        $this->setX(0);
        $this->Cell(0,10,"**********************************************************************************************");
        $this->setY(14);
        $this->setX(2);
        $this->Cell(0,10,"Boleta de Entrada:");
        $this->setY(14);
        $this->setX(80);
        $this->Cell(0,10,"Numero: ".$service->id_operacion);
        $this->setY(18);
        $this->setX(0);
        $this->Cell(0,10,"**********************************************************************************************");
         $this->setY(20);
        $this->setX(38);
        $this->Cell(0,10,"**");
        $this->setY(22);
        $this->setX(38);
        $this->Cell(0,10,"**");
        $this->setY(24);
        $this->setX(38);
        $this->Cell(0,10,"**");
        $this->setY(26);
        $this->setX(38);
        $this->Cell(0,10,"**");
        $this->setY(28);
        $this->setX(38);
        $this->Cell(0,10,"**");
        $this->setY(30);
        $this->setX(38);
        $this->Cell(0,10,"**");
        $this->setY(32);
        $this->setX(38);
        $this->Cell(0,10,"**");
        $this->setY(34);
        $this->setX(38);
        $this->Cell(0,10,"**");
        // -------------------------
        $this->setY(20);
        $this->setX(43);
        $this->Cell(0,10,"DIRECCION");
        $this->setY(24);
        $this->setX(43);
        $this->Cell(0,10,"Jr. San Martin");
        $this->setY(28);
        $this->setX(43);
        $this->Cell(0,10,"Cuadra N. 7");
        $this->setY(32);
        $this->setX(43);
        $this->Cell(0,10,"Satipo - Junin");
        $this->setY(20);
        $this->setX(65);
        $this->Cell(0,10,"**");
        $this->setY(22);
        $this->setX(65);
        $this->Cell(0,10,"**");
        $this->setY(24);
        $this->setX(65);
        $this->Cell(0,10,"**");
        $this->setY(26);
        $this->setX(65);
        $this->Cell(0,10,"**");
        $this->setY(28);
        $this->setX(65);
        $this->Cell(0,10,"**");
        $this->setY(30);
        $this->setX(65);
        $this->Cell(0,10,"**");
        $this->setY(32);
        $this->setX(65);
        $this->Cell(0,10,"**");
        $this->setY(34);
        $this->setX(65);
        $this->Cell(0,10,"**");
        // --------------------------------
        $this->setY(20);
        $this->setX(68);
        $this->Cell(0,10,"CONTACTO");
        $this->setY(24);
        $this->setX(68);
        $this->Cell(0,10,"Movil 1: 924448006");
        $this->setY(28);
        $this->setX(68);
        $this->Cell(0,10,"Movil 1: 937109154");
        $this->setY(32);
        $this->setX(68);
        $this->Cell(0,10,"RUC: 10779199334");
        $this->setY(28);
        $this->setX(65);
        $this->Cell(0,10,"**");
        $this->setY(30);
        $this->setX(65);
        $this->Cell(0,10,"**");
        $this->setY(32);
        $this->setX(65);
        $this->Cell(0,10,"**");
        $this->setY(34);
        $this->setX(65);
        $this->Cell(0,10,"**");

        $this->setY(38);
        $this->setX(2);
        $this->Cell(0,10,"DATOS DEL CLIENTE: ****************************************************************");
        // -----------------------------------
        // $this->setY(24);
        // $this->setX(0);
        // $this->Cell(0,10," *********************************************************************************************");
        $this->setY(42);
        $this->setX(10);
        $this->Cell(0,10," NOMBRE:        ".$service->dueno);

        $this->setY(60);
        $this->setX(20);
        $this->SetFont('Arial','',14);
        $this->Cell(0,10," DETALLES DEL SERVICIO ");
        $this->SetFont('Arial','B',10);

        $starty=0;
        $total = 0;
         $this->setY(95+$starty);
         $this->setX(20);
         $this->setY(95+$starty);
         $this->setX(65);

         $this->setY(70);
        $this->setX(5);
        $this->Cell(0,10,"PLACA: ".$service->placa);
        $this->setY(75);
        $this->setX(5);
        $this->Cell(0,10,"SERVICIO: ".$service->getactividad()->nombre);
         $this->setY(80);
        $this->setX(5);
        $this->Cell(0,10,"FECHA DE SALIDA");
        $this->setY(85);
        $this->setX(5);
        $this->Cell(0,10,$service->fecha);
        // $this->setY(85);
        // $this->setX(5);
        // $this->Cell(0,10,strtoupper("ACTIVIDAD: ".$service->getActividad()->nombre));
         $this->setY(72);
        $this->setX(50);
        $this->Cell(0,10,"**");
        $this->setY(74);
        $this->setX(50);
        $this->Cell(0,10,"**");
        $this->setY(76);
        $this->setX(50);
        $this->Cell(0,10,"**");
        $this->setY(78);
        $this->setX(50);
        $this->Cell(0,10,"**");
         $this->setY(80);
        $this->setX(50);
        $this->Cell(0,10,"**");
        $this->setY(82);
        $this->setX(50);
        $this->Cell(0,10,"**");
        $this->setY(84);
        $this->setX(50);
        $this->Cell(0,10,"**");
         $this->setY(86);
        $this->setX(50);
        $this->Cell(0,10,"**");
        // -----------------------------------
        $this->setY(70);
        $this->setX(55);
        $this->Cell(0,10,"DESCUENTO");
        $this->setY(75);
        $this->setX(55);
        $this->Cell(0,10,"S/. ".$service->descuento);
         $this->setY(80);
        $this->setX(55);
        $this->Cell(0,10,"IMPUESTO");
        $this->setY(85);
        $this->setX(55);
        $this->Cell(0,10,"S/. ".$service->impuesto);
        $this->setY(100);
        $this->setX(2);
        $this->Cell(0,10,strtoupper("ACCION: ".$service->getAccion()->nombre));
        $this->setY(95);
        $this->setX(2);
        $this->Cell(0,10,strtoupper("CANTIDAD DIAS: ".$service->getProcesos()->cantidad_dia));
        $this->setY(90);
        $this->setX(0);
        $this->Cell(0,10,"***************************************************************************");
        $this->setY(92);
        $this->setX(50);
        $this->Cell(0,10,"**");
        $this->setY(94);
        $this->setX(50);
        $this->Cell(0,10,"**");
         $this->setY(96);
        $this->setX(50);
        $this->Cell(0,10,"**");
        $this->setY(98);
        $this->setX(50);
        $this->Cell(0,10,"**");
        $this->setY(100);
        $this->setX(50);
        $this->Cell(0,10,"**");
         $this->setY(102);
        $this->setX(50);
        $this->Cell(0,10,"**");
        $this->setY(104);
        $this->setX(50);
        $this->Cell(0,10,"**");
        $this->setY(106);
        $this->setX(50);
        $this->Cell(0,10,"**");
        $this->setY(98);
        $this->setX(55);
        $this->Cell(0,10,"Sub Total: S/. ".$service->q);
        $this->setY(104);
        $this->setX(55);
        $this->Cell(0,10,"Total: S/. ".$service->subtotal);
}


// Tabla coloreada
}

$pdf = new PDF('P','mm','a12');
$pdf->AddPage();
// $pdf->Header();
$pdf->ImprovedTable("hola");

//echo $name;
$pdf->Output();
// print "<script>window.location=\"".$name."\";</script>";
?>