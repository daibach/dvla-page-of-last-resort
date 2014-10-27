<?php
$title = "Renew vehicle tax";
$govuk =  TRUE;
include_once('../template/head.php');
?>
<section class="offline-apply" aria-labelledby="offline-apply-label">
  <h1 id="offline-apply-label">Other ways to renew your vehicle tax</h1>
  <div class="contacts">
    <div class="by-phone">
      <h2>By phone</h2>
      <ul class="contact-numbers">
        <li><span class="contact-type">Telephone:</span> 0300 123 4321</li>
        <li><span class="contact-type">Textphone:</span> 0300 790 6201</li>
      </ul>
      <div class="call-charges">
        <p>Calls to 03 numbers cost approximately:</p>
        <ul class="charges">
          <li>2p to 10p from landlines</li>
          <li>10p to 40p from mobile phones</li>
        </ul>
        <p><a href="https://www.gov.uk/call-charges">Find out more about call charges</a></p>
      </div>
    </div>

    <div class="at-post-office">
      <h2>At the Post Office</h2>
      <p>Go to your local <a href="http://www.postoffice.co.uk/branch-finder">Post Office</a>. You'll need to take:</p>
      <ul>
        <li>completed V11 reminder (or your V5C)</li>
        <li>MOT test certificate if required (must be valid when the tax disc starts)</li>
        <li>the payment shown on the reminder</li>
      </ul>
      <div class="application-notice info-notice">
        <p>In <a href="http://www.nidirect.gov.uk/insurance-and-mot-needed-to-tax-your-vehicle">Northern Ireland</a> you'll also need an insurance certificate or cover note.</p>
      </div>
    </div>
  </div>
</section>
<?php include_once('../template/foot.php'); ?>
