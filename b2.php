<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $a = $_POST["a"];
  $b = $_POST["b"];

  if ($a == 0) {
    if ($b == 0) {
      $nghiem = "Phương trình vô số nghiệm!";
    } else {
      $nghiem = "Phương trình vô nghiệm!";
    }
  } else {
    $so = -($b / $a);
    $so = round($so, 2);
    $nghiem = "x = " . $so;
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
<form action="b2.php" method="post" >
  <table width="744" border="1">
    <tr>
      <td colspan="3" bgcolor="#336699"><strong>Giải phương trình bậc 1 </strong></td>
    </tr>
    <tr>
      <td width="120">Phương trình </td>
      <td width="250">
        <input name="a" type="text" />
        X + </td>
      <td width="352"><label for="textfield"></label>
        <input name="b" type="text" id="textfield" />
        = 0</td>
    </tr>
    <tr>
      <td colspan="3">
        Nghiệm
        <label for="textfield2"></label>
        <input name="kq" type="text" id="textfield2" readonly value="<?php echo isset($nghiem) ? $nghiem : '' ?>"/></tr>
    <tr>
      <td colspan="3" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất" /></td>
    </tr>
  </table>
</form>

</body>
