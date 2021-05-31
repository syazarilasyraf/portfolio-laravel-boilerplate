<?php
$social = App\Social::first();
?>
<footer class="page-footer" style="background-color:#050505;">
    <div class="container">
        <div class="social-icons">
            <a href="{{ $social->github }}" style="background-color:rgb(0,0,0);">
                <i class="icon ion-social-github"></i></a>
            <a href="{{ $social->linkedin }}" style="background-color:#0e76a8;">
                <i class="icon ion-social-linkedin"></i></a>
            <a href="{{ $social->twitter }}" style="background-color:#00acee;">
                <i class="icon ion-social-twitter"></i></a>
            <a
                href="{{ $social->email }}" style="background-color:#0044ff;">
                <i class="icon ion-email"></i></a>
        </div>
        <a style="color:#d4d4d4;;">Made with 🖤 by wmsacodes</a>
    </div>
</footer>
