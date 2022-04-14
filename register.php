<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<form action="register_check.php" method="POST">
 <table width="200" >
      <tbody> 
      <tr>
        <td for="name" class="form-label">Name</td>
        <td>:</td>
    <td><input type="text" class="form-control" name="Fname" id="name"  required></td> </tr>

    <tr>
    <td for="nric" class="form-label">NRIC / Passport</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="noIC" id="name"  required>
 </td> </tr>

  <tr>
    <td  for="email" class="form-label">Email address</td>
    <td>:</td>
    <td><input type="email"  name="email"   required>
  </td> </tr>

  <tr>
      <td  for="email" class="form-label">State</td>
      <td>:</td>
      <td><?php
    $negeri = array('Choose Your State:-','Pulau Pinang','Kedah','Perak','Perlis','Selangor','Kelantan','Melaka','Terengganu','Negeri Sembilan','Pahang','Johor','Sabah','Sarawak');
    echo "<select name='negeri'>";
      for ($i = 0;$i < count($negeri);$i++)
      {
        echo "<option value='$negeri[$i]'>".$negeri[$i]."</option>";
      }
    echo "</select>"
  ?>
   </td> </tr>

  <tr>
    <td for="password" class="form-label">Password</td>
    <td>:</td>
    <td><input type="password" class="form-control" id="password">
  </td> </tr>
  <tr>
    <td  for="vpassword" class="form-label">Verify Password</td>
    <td>:</td>
    <td><input type="password" class="form-control" id="vpassword">
  </td> </tr>

      <tr>
        <td>&nbsp;</td>
        <td>:</td>
        <td><input type="submit" name="submit" ></td>
      </tr>
</form>

  </tbody>
  </table>