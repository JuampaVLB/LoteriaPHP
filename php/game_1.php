<?php
require '../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

$arr = array(
    "E4",
    "F4",
    "G4",
    "H4",
    "I4",
    "J4",
    "K4",
    "L4",
    "M4",
    "N4",
);

$secondary = array(
    "E7",
    "F7",
    "G7",
    "H7",
    "I7",
    "J7",
    "K7",
    "L7",
    "M7",
    "N7",
    "O7",
    "P7",
    "Q7",
    "R7",
    "S7",
);

$latest = array(
    "E10",
    "F10",
    "G10",
    "H10",
    "I10",
    "J10",
    "K10",
    "L10",
    "M10",
    "N10",
    "O10",
    "P10",
    "Q10",
    "R10",
    "S10",
);

$all_numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25);

$archivoExcel = '../assets/plantillas/LotoFacil 10 Fixas.xlsx';

$spreadsheet = IOFactory::load($archivoExcel);

$worksheet = $spreadsheet->setActiveSheetIndex(1);

$data = json_decode(file_get_contents('php://input'), true);
$numbers = $data['numbers'];
$arrayRestante = array();

for ($i = 0; $i < count($arr); $i++) {
    $worksheet->setCellValue($arr[$i], $numbers[$i]);
}

foreach ($all_numbers as $number) {
    if (!in_array($number, $numbers)) {
        $arrayRestante[] = $number;
    }
}

for ($i = 0; $i < count($arrayRestante); $i++) {
    $worksheet->setCellValue($secondary[$i], $arrayRestante[$i]);
}

for ($i = 0; $i < count($arrayRestante); $i++) {
    $worksheet->setCellValue($latest[$i], $arrayRestante[$i]);
}

$archivoResultado = './resultante.xlsx';
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save($archivoResultado);

$spreadsheet = IOFactory::load($archivoResultado);

$worksheet = $spreadsheet->setActiveSheetIndex(1);

$response = array(
    "E14",
    "F14",
    "G14",
    "H14",
    "I14",
    "J14",
    "K14",
    "L14",
    "M14",
    "N14",
    "O14",
    "P14",
    "Q14",
    "R14",
    "S14",
);

$probando = array();

for ($z = 0; $z < count($response); $z++) {
$casilla = $worksheet->getCell($response[$z])->getCalculatedValue();
$probando[] = [$casilla];
}




echo json_encode($probando);
?>
