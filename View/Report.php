<?phpinclude('../fpdf186/fpdf.php');include '../Model/Connect.php';global $conn;class PDF extends FPDF {    // Function to create table    function CreateTable($header, $data) {        // Header        $this->Image('../Assets/finalLogo.png',5,6,13);        foreach($header as $col) {            $this->Cell(40, 8, $col, 1);            $this->SetFillColor(230,230,0);        }        $this->Ln();        // Data        foreach($data as $row) {            foreach($row as $col) {                $this->Cell(40, 6, $col, 1);            }            $this->Ln();        }    }}// Create instance of PDF class$pdf = new PDF();$pdf->AddPage();$pdf->SetFont('Arial', 'B', 16);// Title$pdf->Cell(180, 10, 'Orders Report', 0, 1, 'C');// Table header$header = array('Order ID', 'CostumerName','Status' ,'Quantity', 'Total');$Query = "Select * from orders";$result = mysqli_query($conn,$Query);$data = array();if(mysqli_num_rows($result) > 0){    while ($row = mysqli_fetch_assoc($result)){        $data[] = array(                $row['OrderId'],                $row['CostumerName'],                $row['OrderStatus'],                $row['Quantity'],                number_format($row['OrderPrice'],2)        );    }}// Line break$pdf->Ln(10);// Set font for table content$pdf->SetFont('Arial', '', 12);// Create table$pdf->CreateTable($header, $data);$pdf->Output();?>