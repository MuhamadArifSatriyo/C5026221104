<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function validateForm() {
           // let x = document.forms["myForm"]["fname"].value;
           var x = document.getElementById("fname");
           var nrp = document.getElementById("nrp");
           //bahwa yang dicek cukup yang invalid
           //lakukan per jenis validasi
            if (x.value == "") {
                alert("Nama harus diisi..");
                x.focus();
                return false; //function ini ada return valuenya
                // stop, tidak dikirim ke server
            }
            if (nrp.value == "") {
                alert("NRP harus diisi..");
                nrp.focus();
                return false; //function ini ada return valuenya
                // stop, tidak dikirim ke server
            }
            if(isNaN(nrp.value) == true) {
                alert("NRP harus berupa angka");
                nrp.focus();
                nrp.value = "";
                return false;
            }
            if(nrp.value.length != 10){
                alert("NRP harus 10 angka, anda memasukkan "+nrp.value.length+" digit!");
                nrp.focus();
                return false;
            }

            if(nrp.value.substring(0,4) != "5026"){
                alert("4 digit pertama harus 5026");
                nrp.focus();
                return false;
            }
            console.log(nrp.value.substring(4,6))
            if(nrp.value.substring(4,6) != 22 && nrp.value.substring(4,6) != "21"){
                alert("digit ke 5&6 harus 22 atau 21");
                nrp.focus();
                return false;
            }
            //default function adalah true
            //return false berfungsi agar form tidak jadi dikirimkan
        }
    </script>
</head>

<body>
    <h2>JavaScript Validation</h2>

    <form name="myForm" action="https://classroom.its.ac.id/my/" onsubmit="return validateForm()" method="post">
        <label for="fname">Name:</label>
        <input type="text" id="fname" name="fname">
        <label for="fname">NRP:</label>
        <input type="text" id="nrp" name="nrp">

        <input type="submit" value="Submit" class="btn btn-primary">
        <input type="reset" value="Kosongi" class="btn btn-warning">

    </form>
</body>

</html>
