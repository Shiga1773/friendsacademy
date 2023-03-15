<style>


/* Float four columns side by side */
.column {
  float: right;
  width: 50%;
  padding: 10px 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: left;
  background-color: #f1f1f1;

}
h3 {
  color:white;
  font-size: 30px;

}

hr {
  border: 0.9px solid white;

}



.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: left;
  background-color: #ff2b2b;
  color:white;
}

.card2 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: left;
  background-color: #0a23ff;
  color:white;

}

.card3 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: left;
  background-color: #fa6f05;
  color:white;
}

.card4 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: left;
  background-color: #d400ff;
  color:white;
}

li {
  font-size: 20px;
 

}


</style>



 <!-- Cool Fetatures Section Start 



    <section id="features" class="section">
      <div class="container">
       <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Private</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Semi-Private</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Group</button>
</div>

<div id="London" class="tabcontent">
  <form action="" method="post">
 
  <h3>Private</h3>
  <p>1 Kelas , 1 Siswa</p>
  <p>Some text about the Class..</p>
  <p>Some text about the Class..</p>
  <p>Some text about the Class..</p>
  <p>Some text about the Class..</p>
  <p>Some text about the Class..</p>
  <p> &nbsp;</p>
  <input type="hidden" id="hak_akses_r" name="hak_akses_r" value="Private">
  <p style="font-size: 24px;">Rp 000.000,00</p><br>
<button id="submit" type="submit" formaction="register.php"  class="btn btn-common" >Book</button>
</form>
  

</div>

<div id="Paris" class="tabcontent">

  <form action="" method="post">
  <h3>Semi-Private</h3>
  <p>1 Kelas, 5 Siswa.</p> 

  <p>Some text about the Class..</p>
  <p>Some text about the Class..</p>
  <p>Some text about the Class..</p>
  <p>Some text about the Class..</p>
  <p>Some text about the Class..</p>
  <p> &nbsp;</p>
  <input type="hidden" id="hak_akses_r" name="hak_akses_r" value="Semi_Private">
  <p style="font-size: 24px;">Rp 000.000,00</p>
  <br>
<button id="submit" type="submit" formaction="register.php"  class="btn btn-common" >Book</button>
</form>
</div>

<div id="Tokyo" class="tabcontent">


  <form action="" method="post">
  <h3>Group</h3>
  <p>1 Kelas, 25 Siswa</p>


  <p>Some text about the Class..</p>
  <p>Some text about the Class..</p>
  <p>Some text about the Class..</p>
  <p>Some text about the Class..</p>
  <p>Some text about the Class..</p>
  <p> &nbsp;</p>
  <input type="hidden" id="hak_akses_r" name="hak_akses_r" value="Group">
  <p style="font-size: 24px;">Rp 000.000,00</p>
  <br>
<button id="submit" type="submit" formaction="register.php"  class="btn btn-common" >Book</button>
</form>
</div>
      </div>
    </section>
    


    Cool Fetatures Section End --> 