<html>
  <head>
    <title>Menghitung Gaji Pokok</title>
  </head>
  <body>
    <form action="hitung_gapok.php" method="post">
      <table>
        <tr>
          <td colspan="2" align="center">
            <h1>Menghitung Gaji Pokok</h1>
          </td>
        </tr>
        <tr>
          <td>Lama Kerja</td>
          <td><input name="lama_kerja" type="text" size="30" maxlength="50" placeholder="Berapa tahun anda sudah bekerja"/></td>
        </tr>
        <tr>
          <td>Golongan</td>
          <td>
            <select name="golongan">
              <option selected="selected">--Pilih Golongan--</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
              <option value="E">E</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" value="Hitung Gaji Pokok" name="simpan">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
