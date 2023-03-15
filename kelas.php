<?php 
include "koneksi.php";
?>

<?php 
//membuat format rupiah dengan PHP
//tutorial www.malasngoding.com
 
function rupiah($angka){
  
  $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
  return $hasil_rupiah;
 
}
 
?>

<?php
                    // Load file koneksi.php
                        include "koneksi.php";
 
                        $query = "SELECT * FROM harga where id='1' "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            $id1 = $data['id'];
                            $kelas1 = $data['kelas'];
                            $harga1 = $data['harga_p'];
                            $peserta1 = $data['peserta'];
                            $waktu1 = $data['waktu'];
                            $pertemuan1 = $data['pertemuan'];


                            

                            }

                        }
                        ?>


                       <?php
                    // Load file koneksi.php
                        include "koneksi.php";
 
                        $query = "SELECT * FROM harga where id='2' "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            $id2 = $data['id'];
                            $kelas2 = $data['kelas'];
                            $harga2 = $data['harga_p'];
                            $peserta2 = $data['peserta'];
                            $waktu2 = $data['waktu'];
                            $pertemuan2 = $data['pertemuan'];


                            

                            }

                        }
                        ?>

                        <?php
                    // Load file koneksi.php
                        include "koneksi.php";
 
                        $query = "SELECT * FROM harga where id='3' "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            $id3 = $data['id'];
                            $kelas3 = $data['kelas'];
                            $harga3 = $data['harga_p'];
                            $peserta3 = $data['peserta'];
                            $waktu3 = $data['waktu'];
                            $pertemuan3 = $data['pertemuan'];


                            

                            }

                        }
                        ?>

                        <?php
                    // Load file koneksi.php
                        include "koneksi.php";
 
                        $query = "SELECT * FROM harga where id='4' "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            $id4 = $data['id'];
                            $kelas4 = $data['kelas'];
                            $harga4 = $data['harga_p'];
                            $peserta4 = $data['peserta'];
                            $waktu4 = $data['waktu'];
                            $pertemuan4 = $data['pertemuan'];


                            

                            }

                        }
                        ?>