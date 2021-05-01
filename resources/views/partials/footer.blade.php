<?php
$social = App\Social::first();
?>
<footer class="footer">
    <div class="footer-links">
      <a
        href="{{ $social->github }}"
        title="My GitHub"
        style="background: #111111"
      >
        <i class="fab fa-github"></i>
      </a>
      <a
        href="{{ $social->linkedin }}"
        title="My LinkedIn"
        style="background: #0e76a8"
      >
        <i class="fab fa-linkedin"></i>
      </a>
      <a
        href="{{ $social->twitter }}"
        title="My Twitter"
        style="background: #00acee"
      >
        <i class="fab fa-twitter"></i>
      </a>
      <a
        href="{{ $social->email }}"
        title="Email me 📧"
        style="background: #0044ff"
      >
        <i class="far fa-envelope"></i>
      </a>
    </div>
    Made with 🖤 by wmsacodes
</footer>
