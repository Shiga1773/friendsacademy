

<style>


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.containeraz {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>




<div class="containeraz">
  <form action="/action_page.php">
    <label for="fname">Nama</label>
    <input type="text" id="nama" name="nama" placeholder="Nama Lengkap">

    <label for="lname">E-Mail</label>
    <input type="text" id="email" name="email" placeholder="E-Mail">

    <label for="lname">Telepon</label>
    <input type="text" id="telp" name="telp" placeholder="Nomor Aktif/WA">

    

    
    <textarea id="pesan" name="pesan" placeholder="Pesan" style="height:200px"></textarea>

    <input type="submit" value="Kirim">
  </form>
</div>

