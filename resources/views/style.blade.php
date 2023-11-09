<html>
    <head>
        <title>pertemuan 2 CSS</title>
        <link rel="stylesheet" href="mystyle.css">
        <style>
            body{
                font-family: Verdana, Geneva, Tahoma, Helvetica, sans-serif;
                color: blueviolet;
            }
            p {
                text-align:center;
                color: salmon;
            }

            .salam{
                font-size: larger;
                text-align: right;
                font-weight: bold;
                text-transform:uppercase;
            }

            .garisbawah{
                text-decoration: underline;
                color: black;
            }

        </style>
    </head>

    <body>
        <!-- Inline CSS , digunakan jika hanya 1 bagian di 1 halaman yang berbeda -->
        Hallo <b style="
        color:red;
        text-decoration: underline;
        text-shadow: 2px 2px 3px rgb(0, 0, 0);
        ">Apa</b> kabar ?
        <!-- Inpage CSS , digunakan jika yang berbeda hanya di 1 halaman-->
        <div class="salam garisbawah">Hallo Apa Kabar ?</div>
        <!-- External File , digunakan untuk global 1 situs -->
        <span class="sembunyi">Hallo Apa kabar ?</span>
        <p>Hallo Apa kabar ?</p>
    </body>
    </html>
