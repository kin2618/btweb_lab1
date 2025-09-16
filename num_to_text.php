<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Lấy số nhập vào
  $so = $_POST["so"];

  // Mảng chuyển số thành chữ
  $numText = [
    0 => "Không",
    1 => "Một",
    2 => "Hai",
    3 => "Ba",
    4 => "Bốn",
    5 => "Năm",
    6 => "Sáu",
    7 => "Bảy",
    8 => "Tám",
    9 => "Chín"
  ];

  // Nếu nhập đúng số từ 0-9
  if (is_numeric($so) && $so >= 0 && $so <= 9) {
    $chu = $numText[$so];
  } else {
    $chu = "Vui lòng nhập số từ 0-9";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kết quả</title>
</head>
<body>
<form action="num_to_text.php" method="POST">
  <table width="519" border="1">
    <tr>
      <td colspan="3">Đọc số</td>
    </tr>
    <tr>
      <td>Nhập số (0-9)</td>
      <td width="69" rowspan="2"><input type="submit" name="button" id="button" value="Submit" /></td>
      <td>Bằng chữ</td>
    </tr>
    <tr>
      <td width="177">
        <input type="text" name="so" id="textfield" value="<?php echo isset($so) ? $so : '' ?>" />
      </td>
      <td width="232">
        <input type="text" name="chu" id="textfield2" readonly value="<?php echo isset($chu) ? $chu : '' ?>" />
      </td>
    </tr>
  </table>
</form>
</body>
</html>
