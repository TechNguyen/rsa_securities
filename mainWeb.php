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
                if($p == 0) {
                    return $x;
                } return gcd($p, $x % $p);
            }
            function oclitmorong($x, $p) {
                $i = 0;
                $q = array();
                $t = array();
                $r = array();
                $t[1] = 1;
                $t[0] = 0;
                if($x > $p) {
                    $temp = $x;
                    while($p != 0) {
                        $q[$i+1] = (int)($x / $p);
                        $r[$i+1] = $p;
                        $r[$i+2] = $x % $p;
                        $p = $r[$i+2];
                        $x = $r[$i+1];
                        if($i > 1) {
                            $t[$i] =  $t[$i-2] - $q[$i-1] * $t[$i-1];
                        }
                        $i++;
                    };
                    $t[$i] =  $t[$i-2] - $q[$i-1] * $t[$i-1]; 
                    while( $t[$i] < 0) {
                        $t[$i] +=  $temp;
                    }
                } else {
                    $sw = $x;
                    $x = $p;
                    $p = $sw;
                    $temp = $x;
                    while($p != 0) {
                        $q[$i+1] = (int)($x / $p);
                        $r[$i+1] = $p;
                        $r[$i+2] = $x % $p;
                        $p = $r[$i+2];
                        $x = $r[$i+1];
                        if($i > 1) {
                            $t[$i] =  $t[$i-2] - $q[$i-1] * $t[$i-1];
                        }
                        $i++;
                    };
                    $t[$i] =  $t[$i-2] - $q[$i-1] * $t[$i-1];
                    while( $t[$i] < 0) {
                        $t[$i] +=  $temp;
                    }
                }
                return  $t[$i];
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
            function signature($x, $k, $alpha ,$p, $a) {
                $f = binhphuong($alpha,$k,$p);
                $knghichdao = oclitmorong($k, $p-1);
                $omega = (($x - $a * $f) *   $knghichdao) % ($p - 1);
                while( $omega < 0) {
                    $omega += ($p-1);
                }
                return [$f,$omega];
            }

            function checksign($x,$alpha,$a,$p) {
                $belta = binhphuong($alpha,$a,$p);
                $mahoa = binhphuong($alpha,$x,$p);
                echo $mahoa;
            }
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(!empty($_REQUEST['textElagamal'])) {
                    $text = intval($_REQUEST['textElagamal']);
                    $b = binhphuong(2,211,463);
                    $c = binhphuong(2,235,463);
                    $d = gcd(8,29);
                    $e = oclitmorong(235,462);
                    // signature(112,235,2,463,211);
                    checksign(112,2,463);
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