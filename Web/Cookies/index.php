<?php //  لازم مسافة في البداية عند كتابة الphp 

// أولًا: إذا المستخدم اختار لغة جديدة
if (isset($_POST["languange"])) {

    $cookeName = "languange";
    $cookevalue = $_POST["languange"];

    setcookie($cookeName, $cookevalue, time() + 86400);

}


?>
<!DOCTYPE html>
<html lang="en" dir="RTL">
<head>
    <meta charset="UTF-8">
    <title>تخزين لغة المستخدم</title>
</head>
<body>

<form method="POST">
    <label for="languange">اختر اللغة:</label>

    <select name="languange" id="languange" required>
        <option value="AR">Arabic</option>
        <option value="EN">English</option>
    </select>

    <button type="submit">Save</button>
</form>
<?php 

 if ( $cookevalue == "EN") 

{ include "english.php"; } 

elseif ( $cookevalue == "AR")

 { include "arabic.php"; } ?>
</body>
</html>