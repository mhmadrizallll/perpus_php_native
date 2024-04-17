<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Peminjaman Buku</title>
  </head>
  <body>
    <center>
      <h1>Website Perpustakaan</h1>
    </center>

    <hr />

    <form action="">
      <h2>Form Peminjaman Buku</h2>
      <div>
        <label for="name">Nama :</label>
        <input type="text" name="name" id="name" />
      </div>
      <div>
        <label for="nis">Nis :</label>
        <input type="number" name="nis" id="nis" />
      </div>
      <div>
        <label for="gender">Jenis Kelamin :</label>
        <input type="radio" name="gender" id="gender"> laki-laki
        <input type="radio" name="gender" id="gender"> perempuan
      </div>
      <div>
        <label for="kelas">Kelas :</label>
        <select name="kelas" id="kelas">
          <option value="">Pilih Kelas</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select>
      </div>
      <div>
        <label for="jurusan">Jurusan :</label>
        <select name="jurusan" id="jurusan">
          <option value="">Pilih Jurusan</option>
          <option value="tkj">Teknik Komputer Jaringan</option>
          <option value="ak">Akuntansi</option>
          <option value="rpl">Rekasa Perangkat Lunak</option>
          <option value="ap">Administrasi Perkantoran</option>
        </select>
      </div>
      <div>
        <label for="namaBuku">Nama Buku :</label>
        <input type="text" name="namaBuku" id="namaBuku" />
      </div>
      <button type="submit">Pinjam Buku</button>
    </form>
  </body>
</html>
