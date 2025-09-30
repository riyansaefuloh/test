<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkenalan</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">

        <div class="header">
            <h1>Welcome in personal web</h1>
        </div>

        <div class="profile">
            <img src="profile.jpg" alt="profile" width="100" height="100">
        </div>

        <div class="data-diri">
            <?php
            $nama ="Riyan saefuloh";
            $nim ="102092400033";
            $fakultas="Rekayasa Industri";
            $prodi ="Sistem Informasi";
            echo" $nama/$nim/$fakultas/$prodi";
            ?>
        </div>
   
        <div class="sosmed">
            <table>
                <tr>
                    <td align="center">
                        <a href="https://www.facebook.com/share/1K18WjAHSh/">
                            <img src="facebook.png" alt="facebook" width="50" height="50"><br>
                             facebook
                        </a>
                    </td>
                    <td align="center">
                        <a href="https://www.instagram.com/riyan.pxr_?igsh=MXBkZjE0YWloamF1aQ==">
                            <img src="instagram.png" alt="instagram" width="50" height="50"><br>
                             instagram
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>