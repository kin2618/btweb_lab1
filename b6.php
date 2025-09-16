<?php
$ket_qua = ""; // mặc định rỗng

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST["nhap_mang"])) {
    // Lấy dữ liệu
    $mang_str = $_POST["nhap_mang"];

    // Tách mảng theo dấu phẩy
    $mang = explode(",", $mang_str);

    // Chuyển từng phần tử về số (loại bỏ khoảng trắng)
    $mang_so = array_map('intval', array_map('trim', $mang));

    // Tính tổng
    $ket_qua = array_sum($mang_so);
  } else {
    $ket_qua = "Bạn chưa nhập dãy số!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nhập và tính toán trên dãy số</title>
  <meta charset="utf-8">
  <style>
    *{
      font-family: Tahoma;
    }
    table{
      width: 400px;
      margin: 100px auto;
      border-collapse: collapse;
    }
    table th{
      background: #66CCFF;
      padding: 10px;
      font-size: 18px;
    }
    table td{
      padding: 5px;
    }
  </style>
</head>
<body>
<form method="POST" action="b6.php">
  <table border="1">
    <thead>
    <tr>
      <th colspan="2">NHẬP VÀ TÍNH TRÊN DÃY SỐ</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>Nhập dãy số:</td>
      <td><input type="text" name="nhap_mang" value="<?php echo $_POST['nhap_mang'] ?? '' ?>"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="btn_goi" value="Tổng dãy số" ></td>
    </tr>
    <tr>
      <td>Tổng dãy số:</td>
      <td><input type="text" disabled value="<?php echo $ket_qua ?>"></td>
    </tr>
    </tbody>
  </table>
</form>
</body>
</html>
