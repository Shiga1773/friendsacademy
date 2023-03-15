<br>

<form name="myForm" method="post" onsubmit="return validateForm()" enctype="multipart/form-data"  action="../../action/tambah_kelas_s.php"  >
    <table class="table" border="0">
                    <thead>
                        <tr>
                                <td width="10%">Teacher    
                                </td>
                                <td>
                                <div class="custom-select" style="width:100%;">    
                                     <select style="height:2.2em;width: 100%;" name="id_guru" id="id_guru">
    <option disabled selected>-- Select Teacher --</option>
     <?php
                    // Load file koneksi.php
                        include "../../koneksi.php";
 
                        $query = "SELECT * FROM pengguna WHERE hak_akses='3' "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            
                           


                        echo "<option value='". $data['id'] ."'>" .$data['nama2'] ."</option>";
                  





                   
                        }
                        }
                        ?> </select> </div>
                                   
                                    
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">Date
                                </td>
                                <td><input type="date" name="tanggal" id="tanggal" style="height:2em;width: 100%;">

                                    <input type="hidden" name="nama_kelas" id="nama_kelas" value="private" >
                                    
                                   
                                    <input type="hidden" name="jenis_kelas" id="jenis_kelas" value="s1">
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Time (25min) 
                                </td>
                                <td>
                                    <div class="custom-select" style="width:100%;">
                                    <select style="height:2.2em;width: 100%;" name="jam_kelas" id="jam_kelas">
                                    <option selected="active" disabled>Pick A Time</option>
                                    <option>08:30 - 08:55</option>
                                    <option>09:00 - 09:25</option>
                                    <option>09:30 - 09:55</option>
                                    <option>10:00 - 10:25</option>
                                    <option>10:30 - 10:55</option>
                                    <option>11:00 - 11:25</option>
                                    <option>11:30 - 11:55</option>
                                    <option>12:00 - 12:25</option>
                                    <option>12:30 - 12:55</option>
                                    <option>13:00 - 13:25</option>
                                    <option>13:30 - 13:55</option>
                                    <option>14:00 - 14:25</option>
                                    <option>14:30 - 14:55</option>
                                    <option>15:00 - 15:25</option>
                                    <option>15:30 - 15:55</option>
                                    <option>16:00 - 16:25</option>
                                    <option>16:30 - 16:55</option>
                                    <option>17:00 - 17:25</option>
                                    <option>17:30 - 17:55</option>
                                    <option>18:00 - 18:25</option>
                                    <option>18:30 - 18:55</option>
                                    <option>19:00 - 19:25</option>
                                    <option>20:30 - 20:55</option>
                                     </select> </div>
                                </td>
                            </tr>
                           
                            
                            <tr>
                                <td><button type="submit" class="btn btn-sm btn-info">Add Class</button>
                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                   
                                </td>
                            </tr>
                           
                    </thead>
                    <tbody>
                        
                       
                      </tbody>
                </table>
            </form>
