<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <title>Document</title>
</head>
<body>
        <?php 

            function gcd($x,$p) {
                while($x != $p) {
                    if($x > $p) {
                        $x -= $p;
                    }else {
                        $p -= $x;
                    }
                }
                return $x;
            }
            function oclitmorong($x, $p) {
                $i = 0;
                $t = 0;
               if($x > $p) {
                $q = $x / $p;
                $r = $x % $p;
                while($r != 0) {
                    $x = $q;
                    $p = $r;
                    $i++;
                };
               } else{
                $q = $p / $x;
                $r = $p % $x;
               }
            }
            function binhphuong( $x,$k,$n) {
                $p = 0;
                if($k == 0) {
                    return 1;
                }else {
                    $p = binhphuong($x, $k/2, $n);
                    if ($k%2 == 0){
                        return ($p * $p) % $n;
                    } else {
                        return ($p * $p * $x) % $n;
                    }
                }
            }
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(!empty($_REQUEST['textElagamal'])) {
                    $text = intval($_REQUEST['textElagamal']);
                    $b = binhphuong(2,211,463);
                    $c = binhphuong(2,235,463);
                    // $d = oclitmorong(235,462);
                    echo  $d;
               }
            }
           
        ?>
    <div class="form-elgamal">
        <h5 style="text-transform: uppercase;font-weight: bolder;">Phát sinh chữ ký</h5>
        <form method="post" action="mainWeb.php" >
                <div class="form__item" style="display: flex;">
                    <label for="textElagamal">Văn bản ký:</label>
                    <textarea name="textElagamal" id="textElagamal" cols="40" rows="5"></textarea>
                    <button class="file__btn">File</button>
                </div>
                <button class="ky__btn">Ký</button>
            <div class="form__item" style="display: flex;">
                <label for="encryptElagaml">Chữ ký:</label>
                <textarea name="encryptElagaml" id="encryptElagaml" cols="40" rows="5"></textarea>
                <div class="form-btn" style="display: flex;">
                    <button class="chuyen__btn">Chuyển</button>
                    <button class="luu__btn">Lưu</button>
                </div>
            </div>
        </form>


    </div>
</body>
</html>