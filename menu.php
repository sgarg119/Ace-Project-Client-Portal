<?php
  require_once 'PhpRbac/autoload.php';  
  session_start();
  if (!isset($g_page)) {
      $g_page = '';
  }
  
  use PhpRbac\Rbac;
  $rbac = new Rbac();
  $role_id = $rbac->Roles->returnId('admin');

 

?>
<ul id="menu">
<div class="w3-top">
  <div class="w3-row w3-large w3-light-grey">
    <div class="w3-col s3">
    <a href="/blog/index.php" class="w3-button w3-block">Home</a></div>
    <?php
    if(!isset($_SESSION['username'])){
?>
<div class="w3-col s3">
    <a href="/blog/login/main_login.php" class="w3-button w3-block">Login</a></div>
<div class="w3-col s3">
       <a href="/blog/login/register.php" class="w3-button w3-block">Register</a></div>
<?php } 
    if (isset($_SESSION['username']) && $rbac->Users->hasRole($role_id, $_SESSION['userid'])){
?>
<div class="w3-col s3">    <a href="admin.php" class="w3-button w3-block">Admin</a></div>

<div class="w3-col s3">
<a href="/blog/create.php" class="w3-button w3-block">New Post</a></div>

    
<div class="w3-col s3">
    <a href="/blog/login/logout.php" class="w3-button w3-block">Logout</a></div>
</div>
<?php 
} 
?>
</ul> <!-- END div id="menu" -->
 