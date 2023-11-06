<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Input Data</title>
</head>
<body>
<?php foreach ($penumpang as $u) : ?>
    <form action="<?= base_url(). 'tiket/update'; ?>"
            method="post"
            enctype="multipart/form-data">
        <pre>
        ==================================================
            <b>TIKET ONLINE JAKATA - MALAYSIA  </b>
        ==================================================

        <input type="hidden" name="id" value=" <?= $u->id; ?>"></label>
        <label for="usename">Nama           :<input type="text" name="nama" id="username" placeholder="Masukan Nama"></label>

        <label>Pilih Kode Pesawat : <select name="pesawat">
            <option value="Garuda">Garuda</option>
                <option value="Merpati">Merpati</option>
                <option value="Batavia">Batavia</option>
            </select>
        </label>
        <label>Pilih Kode kelas       : </label><label for kelas="kelas"><input type="radio" name="kelas" id="kelas" value="Eksekutif">Eksekutif</label>
                                 <label for kelas="kelas"><input type="radio" name="kelas" value="Bisnis">Bisnis</label>
                                 <label for kelas="kelas"><input type="radio" name="kelas" value="Bisnis">Ekonomi</label>
        
        <label>Pilih Kode Pesawat : <select name="jumlah">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            </select>

          <input type="submit" name="submit" value="simpan"/> <input type="reset" value="Batal"/> <?=anchor('tiket/index','<input type="button" value="kembali" class="kembali-1"/>');?><br>
          ==================================================
          </pre>
        </form>
    <?php endforeach; ?>
</body>
</html>