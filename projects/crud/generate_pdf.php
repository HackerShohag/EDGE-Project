<?php
require_once 'config/database.php';
require_once 'libs/fpdf.php';

// Create a new PDF instance
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

// Add a title
$pdf->Cell(190, 10, 'User List Report', 1, 1, 'C');
$pdf->Ln(10); // Line break

// Add table headers
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(10, 10, 'ID', 1);
$pdf->Cell(50, 10, 'Name', 1);
$pdf->Cell(80, 10, 'Email', 1);
$pdf->Cell(50, 10, 'Created At', 1);
$pdf->Ln();

// Fetch user data from the database
$query = "SELECT * FROM users ORDER BY created_at DESC";
$result = $conn->query($query);

$pdf->SetFont('Arial', '', 12);
while ($user = $result->fetch_assoc()) {
    $pdf->Cell(10, 10, $user['id'], 1);
    $pdf->Cell(50, 10, $user['name'], 1);
    $pdf->Cell(80, 10, $user['email'], 1);
    $pdf->Cell(50, 10, $user['created_at'], 1);
    $pdf->Ln();
}

// Output the PDF
$pdf->Output('D', 'UserList.pdf'); // Forces download with the name 'UserList.pdf'
?>
