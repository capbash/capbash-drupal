
<div class="header wrapper">

  <div class="row">
    <div class="item twelve columns">
      <h1>Drupal Admin</h1>
    </div>
  </div>

</div>

<div class="login wrapper">

  <?php require_view("ui/display_message") ?>
  <div class="row">
    <div class="item twelve columns">
      <?php require_view('show/list', array( "sites" => $GLOBALS["viewables"]["sites"] )); ?>
      <div class="medium primary btn">
        <a href="/">Refresh</a>
      </div>

    </div>
  </div>

</div>

