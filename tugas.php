<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riyan Saefuloh</title>
    <link rel="icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container"> 
        </div>

        <div class="profile">
            <img src="profile.jpg" alt="profile">
        </div>

        <div class="data-diri">
            <h2> <?php
            $nama ="Riyan saefuloh";
            $nim ="102092400033";
            $fakultas="Rekayasa Industri";
            $prodi ="Sistem Informasi";
            echo" $nama/$nim/$fakultas/$prodi";
            ?></h2>
        </div>
   
        <div class="sosmed">
        
                        <a class="sosmed_a" href="https://www.facebook.com/share/1K18WjAHSh/" target="blank">
                            <img class="img" src="facebook.png" alt="facebook">
                            <span>facebook</span>
                        </a>
                    
                        <a class="sosmed_a" href="https://www.instagram.com/riyan.pxr_?igsh=MXBkZjE0YWloamF1aQ==" target="blank">
                            <img class="img" src="instagram.png" alt="instagram">
                            <span>instagram</span>
                        </a>

                        <a class="sosmed_a" href="https://www.linkedin.com/in/riyan-saefuloh-b671b6328?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"target="blank">
                            <img class="img" src="linkedIn.png" alt="linkedIn">
                            <span>linkedIn</span>
                        </a>
        
        <table class="table">
        <tr>
        <td><b>Nama</b><br><?php echo $nama ?></td>
        </tr>
        <tr>
        <td><b>Nim</b><br><?php echo $nim ?></td>
        </tr>
        <tr>
        <td><b>Fakultas</b><br><?php echo $fakultas ?></td>
        </tr>
        <tr>
        <td><b>Prodi</b><br><?php echo $prodi ?></td>
        </tr>
        </table>
                  
        </div>
        <div class="footer">
            <?php
            date_default_timezone_set(timezoneId: "Asia/Jakarta");
            echo "Sekarang: " . date(format: "l, d-m-Y H:i:s")."<br>";
            echo "Dibuat dengan sepenuh hati";
            ?>
        </div>
    </div>
</body>
</html>