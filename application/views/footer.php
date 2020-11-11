<footer>
  <div class="footer-bg">
    <div class="logo-footer">
      <a href="index.html">
        <img src="images/footer-logo.png" width="120px">
      </a>
    </div>
    <div class="footer-social-links">
      <a href="<?= $contact["facebook"]; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
      <a href="<?= $contact["youtube"]; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
      <a href="<?= $contact["twitter"]; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
      <a href="<?= $contact["google"]; ?>" target="_blank"><i class="fa fa-youtube-play"></i></a>
    </div>
    <div class="menu-footer-container">
      <ul id="menu-footer" class="footer-menu">
        <li><a href="<?php echo  base_url("about"); ?>">About Us</a></li>
        <li><a href="<?php echo  base_url("Case_studies"); ?>">Case studies</a></li>
        <li><a href="<?php echo  base_url("Services"); ?>">services</a></li>
        <li><a href="<?php echo  base_url("Conversation_Optimaization"); ?>">Conversation Optimaization</a></li>
        <li><a href="<?php echo  base_url("Seo"); ?>">Search Engine Optimization</a></li>

        <li><a href="<?php echo  base_url("Contact"); ?>">Contact Us</a></li>
      </ul>
    </div>
    <div class="copyright">
      Copyright &copy; 2014 - 2020 . All Rights Reserved.
      <span class="quart">Designed and Developed By <a href="#" target="_blank">Insydin Technologies</a></span>
    </div>
  </div>
</footer>