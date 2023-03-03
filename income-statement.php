<?php

require_once "data_source/session.php";
require_once "data_source/database_connection.php";

require './vendor/autoload.php';

use \PhpOffice\PhpSpreadsheet\Spreadsheet;
use \PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
// $sheet = $spreadsheet->getActiveSheet();
// $sheet->setCellValue('A1', 'Hello World !');

$spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);

$header_row_array = ['Sr.', 'Date', 'Name', 'Profit (in points)'];
$spreadsheet->getActiveSheet()->fromArray($header_row_array);

$current_user_sql = "SELECT * from users_tbl WHERE id = '$_SESSION[id]'";
$current_user_q = $conn->query($current_user_sql);
$current_user_q->setFetchMode(PDO::FETCH_ASSOC);
$current_user_row = $current_user_q->fetch();

$ref_user_sql = "SELECT * from income_history WHERE random_id = '$current_user_row[random_id]'";
$ref_user_q = $conn->query($ref_user_sql);
$ref_user_q->setFetchMode(PDO::FETCH_ASSOC);

// if ($ref_user_row) {
    // $transaction_sql = "SELECT * from transaction WHERE buyer = '$ref_user_row[random_id]'";
    // $transaction_q = $conn->query($transaction_sql);
    // $transaction_q->setFetchMode(PDO::FETCH_ASSOC);

    $count = 1;
    $row_count = 2;
	while ($income_row = $ref_user_q->fetch()) {
        $spreadsheet->getActiveSheet()->fromArray(array($count++, $income_row['date'], $income_row['ref_name'], $income_row['points']), null, 'A'.$row_count);
        $row_count++;
    }
// }

$writer = new Xlsx($spreadsheet);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="'. urlencode('income-report.xlsx').'"');
$writer->save('php://output');

?>