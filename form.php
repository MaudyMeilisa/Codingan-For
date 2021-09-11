<!DOCTYPE html>
<html>
    <head>
        <title>Form Biodata</title>
</head>
<body>
    <h2>Form Biodata</h2>
    <form method ="POST" action= "">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type ="text" name = 'nama'></td>
</tr>
<tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type ="text" name = 'lahir'></td>
</tr>
<tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type ="date" name = 'tanggal'></td>
</tr>
<tr>
                <td>Jenis kelamin</td>
                <td>:</td>
                <td><input type ="radio" name = 'jenis' value = "perempuan">perempuan</td>
                <td><input type ="radio" name = 'jenis' value = "laki laki">laki laki</td>
</tr>
<tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name = 'alamat' cols= '40' rows='5'></textarea>
</td>
</tr>
<tr>
                <td>Agama</td>
                <td>:</td>
                <td><select name = 'agama'>
                    <option value ='islam'>islam</option>
                    <option value ='kristen'>kristen</option>
                    <option value ='hindu'>hindu</option>
                    <option value ='khonghucu'>khonghucu</option>
                    <option value ='katolik'>katolik</option>
                </td>
</tr>
<tr>
                <td>Pendidikan</td>
                <td>:</td>
                <td><select name = 'pendidikan'>
                    <option value ='tk'>tk</option>
                    <option value ='sd'>sd</option>
                    <option value ='smp'>smp</option>
                    <option value ='smk'>smk</option></select>
                </td>
</tr>
<tr>
                <td>status</td>
                <td>:</td>
                <td><select name = 'status'>
                    <option value ='pelajar'>pelajar</option>
                    <option value ='kawin'>kawin</option>
                    <option value ='tamat'>tamat</option></select>
                </td>
</tr>
<tr>
                <td>Hobi</td>
                <td>:</td>
                <td><input type ="checkbox" name = 'hobi' value='membaca'>membaca
                <input type ="checkbox" name = 'hobi' value='berenang'>berenang
                <input type ="checkbox" name = 'hobi' value='travellig'>travelling
                <input type ="checkbox" name = 'hobi' value='menulis'>menulis
            </td>
</tr>
<tr>
                <td>cita cita</td>
                <td>:</td>
                <td><select name = 'citacita'>
                    <option value ='guru'>guru</option>
                    <option value ='dokter'>dokter</option>
                    <option value ='pramugari'>pramugari</option>
                    <option value ='programing'>programing</option></select>
                </td>
</tr>
<tr>
                <td>Motivasi</td>
                <td>: </td>
                <td><input type ="textarea" name = 'motivasi'></td>
</tr>
<tr>
                <td></td>
                <td></td>
                <td> <input type="submit" name="simpan" value ='kirim'></td>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST['simpan'])){
    $nama =$_POST['nama'];
    $lahir =$_POST['lahir'];
    $tanggal =$_POST['tanggal'];
    $jenis=$_POST['jenis'];
    $alamat =$_POST['alamat'];
    $agama =$_POST['agama'];
    $pendidikan =$_POST['pendidikan'];
    $status =$_POST['status'];
    $hobi =$_POST['hobi'];
    $citacita =$_POST['citacita'];
    $motivasi =$_POST['motivasi'];


    echo "=====================BIODATA DIRI====================<br>";
    echo "=====================================================<br>";
    echo "nama = $nama <br>";
    echo "lahir = $lahir <br>";
    echo "tanggal = $tanggal <br>";
    echo "jenis= $jenis <br>";
    echo "alamat = $alamat <br>";
    echo "agama = $agama <br>";
    echo "pendidikan = $pendidikan <br>";
    echo "status = $status <br>";
    echo "hobi= $hobi <br>";
    echo "cita cita = $citacita <br>";
    echo "motivasi = $motivasi <br>";
    echo "=====================================================";





}
?>