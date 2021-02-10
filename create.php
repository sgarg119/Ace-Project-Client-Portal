<?php
  require 'config.php';
  require 'database.php';
  $g_title = BLOG_NAME . ' - New Post';
  $g_page = 'create';
  require 'header.php';
  require 'menu.php';
?>
<div class="w3-center w3-padding-64" id="New Blog Post">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">New Blog Post</span>
  </div>

  <form class="w3-container" action="process_post.php" target="_blank">
    <div class="w3-section">
      <label>Name</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="title" name="Title" required>
    </div>
    <div class="w3-section">
      <label>Message</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="content" name="content" required>
    </div>
    <button type="submit" class="w3-button w3-block w3-black">Submit</button>
  </form>

<?php
  require 'footer.php';
?>