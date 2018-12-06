<?php
$subjects = array(
  'Allgemein',
  'Beschwerde',
  'Anfrage',
);
$submitted = isset($_POST['submit']);
?>
<?php if($submitted):?>

<h2>Vielen Dank für Ihre Nachricht</h2>
<p>Wir werden uns umgehend bei Ihnen melden</p>
<p>Folgende Daten wurden versendet:</p>

<ul class="contact-summary">
  <li><span class="contact-summary-title">
    Betreff:</span> <?php print $_POST['subject'];?></li>
  <li><span class="contact-summary-title">Name:</span> <?php print $_POST['anrede'] . ' ' . $_POST['vorname'] . ' ' . $_POST['nachname'];?></li>
  <li><span class="contact-summary-title">E-Mail:</span> <?php print $_POST['email'];?></li>
  <li><span class="contact-summary-title">Nachricht:</span> <?php print $_POST['message'];?></li>
</ul>

<p><a href="/contact.php">Zurück zum Kontaktformular</a></p>

<?php elseif(!$submitted):?>

<form action="contact.php" method="POST">
<div class="form-item-group">
    <div class="form-item form-item--type-select">
      <select name="subject" id="subject">
        <?php foreach($subjects as $subject):?>
          <option value="<?php print $subject;?>"><?php print $subject;?></option>;
        <?php endforeach;?>
      </select>
    </div>
</div>
<div class="form-item-group form-item-group--type-radio">
  <div class="form-item form-item--type-radio">
    <input type="radio" id="Frau" name="anrede" value="Frau" checked/>
    <label for="Frau">Frau</label>
  </div>
  <div class="form-item form-item--type-radio">
    <input type="radio" id="Herr" name="anrede" value="Herr"/>
    <label for="Herr">Herr</label>
  </div>
</div>
<div class="form-item-group-wrapper">
  <div class="form-item-group">
    <div class="form-item form-item--type-text">
      <input type="text" name="vorname" class="js-validate" required/>
      <div class="form-item-group__title">Vorname</div>
    </div>
  </div>
  <div class="form-item-group">
    <div class="form-item form-item--type-text">
      <input type="text" name="nachname" class="js-validate" required/>
      <div class="form-item-group__title">Nachname</div>
    </div>
  </div>
</div>
<div class="form-item-group">
    <div class="form-item form-item--type-email">
      <input type="email" name="email" class="js-validate" required/>
      <div class="form-item-group__title">E-Mail</div>
    </div>
</div>
<div class="form-item-group">
    <div class="form-item form-item--type-textarea">
      <textarea name="message" class="js-validate" required></textarea>
      <div class="form-item-group__title">Ihre Nachricht</div>
    </div>
</div>
<div class="form-item-group">
  <div class="form-item form-item--type-checkbox">
    <input type="checkbox" name="confirm" id="confirm" class="js-validate" required/>
    <label for="confirm">Ich stimme allen Sachen zu</label>
  </div>
</div>
<div class="form-item-group">
  <div class="form-item form-item--type-submit">
    <input type="submit" value="Absenden" name="submit" />
  </div>
</div>
</form>
<script>
  (function(){
    var inputs = document.getElementsByClassName('js-validate');
    for(var i = 0; i < inputs.length; i++) {
      var input = inputs[i];
      input.addEventListener('keyup', function(){
        if(this.value !== '') {
          this.classList.add('is-not-empty');
        } else {
          this.classList.remove('is-not-empty');
        }
      })
    }
  })();
  </script>
<?php endif;?>
