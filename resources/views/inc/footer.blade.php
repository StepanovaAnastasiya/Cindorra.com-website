
<?php

Use Jorenvh\Share\Providers\ShareServiceProvider;

echo Share::page(url()->current(), 'Cindorra.com')
->facebook()
->twitter()
->linkedin('Cindorra')
->whatsapp();
?>

<!--  <section id="footer">
<ul class="icons">
<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
</ul>

</section>
 -->
<p class="copyright">&copy; Untitled. <!-- Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.--></p>
