<?php
session_start();

 require 'config.php';
require 'database.php';
//$g_title = BLOG_NAME . ' - Index';
//$g_page = 'index';
require 'header.php';
require 'menu.php';
$posts = find_all_blogs(BLOG_INDEX_NUM_POSTS);

?>
  <!-- Grid -->
  <div class="w3-row w3-container w3-light-grey">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">POSTS</span>
    </div>
<?php foreach($posts as $post): ?>
    <div class="w3-col l4 m6 w3-light-grey w3-container w3-padding-16">
      <h3><a href="show.php?id=<?=$post['id']?>"><?= htmlspecialchars($post['title']) ?></a></h3>
      <p> <small> <?= $post['created_at'] ?> </small> </p>
      <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
    </div>
<?php endforeach; ?>
  </div>
  <!-- Grid -->




  <div class="w3-row w3-container">
      <div class="w3-card-12">
        <img src="/blog/images/saurav.jpg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>Saurav Garg</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>Information Security 3rd Semester Student. College ID- 0340286</p>
          <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
        </div>
	<hr class="w3-opacity">
      </div>
  </div>

<?php
require 'footer.php';
?>