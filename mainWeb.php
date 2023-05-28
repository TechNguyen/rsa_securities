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
    <div class="form-elgamal">
        <h5 style="text-transform: uppercase;font-weight: bolder;">Phát sinh chữ ký</h5>
        <form action="">
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