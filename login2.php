<style type="text/css">
  body {
  font-family: calibri;
}

.tblLogin {
  border: #95bee6 1px solid;
  background: #d1e8ff;
  border-radius: 4px;
}

.tableheader {
  font-size: 24px;
}

.tableheader td {
  padding: 20px;
}

.tablerow td {
  text-align: center;
}

.message {
  color: #FF0000;
  font-weight: bold;
  text-align: center;
  width: 100%;
}

.login-input {
  border: #CCC 1px solid;
  padding: 10px 20px;
}

.btnSubmit {
  padding: 10px 20px;
  background: #2c7ac5;
  border: #d1e8ff 1px solid;
  color: #FFF;
}
</style>




<form name="frmUser" method="post" action="">
  <div class="message"><?php if($message!="") { echo $message; } ?></div>
  <table border="0" cellpadding="10" cellspacing="1" width="500"
    align="center" class="tblLogin">
    <tr class="tableheader">
      <td align="center" colspan="2">Enter Login Details</td>
    </tr>
    <tr class="tablerow">
      <td><input type="text" name="userName" placeholder="User Name"
        class="login-input"></td>
    </tr>
    <tr class="tablerow">
      <td><input type="password" name="password" placeholder="Password"
        class="login-input"></td>
    </tr>
    <tr class="tableheader">
      <td align="center" colspan="2"><input type="submit" name="submit"
        value="Submit" class="btnSubmit"></td>
    </tr>
  </table>
</form>