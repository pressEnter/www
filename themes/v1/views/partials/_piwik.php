  <?php if (!in_array(@$_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))): ?>
  <!-- Piwik -->
  <script type="text/javascript">
  var pkBaseURL = (("https:" == document.location.protocol) ? "https://piwik.tom.pressenter.com.ar/" : "http://piwik.tom.pressenter.com.ar/");
  document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
  </script>
  <script type="text/javascript">
  try {
    var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
    piwikTracker.trackPageView();
    piwikTracker.enableLinkTracking();
  } catch( err ) {
  }
  </script>
  <noscript>
  <p>
  <img src="http://piwik.tom.pressenter.com.ar/piwik.php?idsite=1" style="border:0" alt="" />
  </p>
  </noscript>
  <!-- End Piwik Tracking Code -->
  <?php endif;?>
