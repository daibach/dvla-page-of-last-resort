<?php
$title = "Make a SORN";
$govuk =  TRUE;
include_once('../template/head.php');
?>
<section class="offline-apply" aria-labelledby="offline-apply-label">
  <h1 id="offline-apply-label">Other ways to make a SORN</h1>
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

    <div class="by-post">
      <h2>By post</h2>
      <p>Send your SORN application (<a href="https://www.gov.uk/government/publications/v890-statutory-off-road-notification-sorn">form V890</a>) to
        DVLA. You can make a SORN up to 2 calendar months in advance by post, but if
        you’re doing it this far in advance include a letter explaining why.</p>

      <div class="address">
        <div class="adr org fn">
          <p>DVLA
            <br>Swansea
            <br>SA99 1AR
          </p>
        </div>
      </div>

      <p>You must make a SORN by post if you’re:</p>
      <ul>
        <li>recently registered as the vehicle’s keeper and have received the V5C registration certificate in the current month</li>
        <li>not yet registered as the vehicle’s keeper</li>
      </ul>
    </div>
  </div>
</section>
<?php include_once('../template/foot.php'); ?>
