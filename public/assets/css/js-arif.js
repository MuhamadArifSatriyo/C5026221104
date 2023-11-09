function validateForm() {
    var nama = document.getElementById("fname")
    var noWA = document.getElementById("wa");
    var pesan = document.getElementById("pesan");

     if (nama.value == "") {
         alert("Nama harus diisi..");
         nama.focus();
         return false; 
     }
     if (noWA.value == "") {
         alert("Nomor Whatsapp harus diisi..");
         noWA.focus();
         return false; 
     }
     if(isNaN(noWA.value) == true) {
        alert("Nomor Whatsapp harus berupa angka");
        noWA.focus();
        noWA.value = "";
        return false;
    }
     if (pesan.value == "") {
        alert("Tolong isi pesan anda");
        pesan.focus();
        return false; 
    }
    else{
        alert("Terima Kasih telah menghubungi kami. mohon ditunggu balasan dari kami")
    }
 }