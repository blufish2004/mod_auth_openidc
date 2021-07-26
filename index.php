<html>
  <body>
    <h1>Hello, <?php echo($_SERVER['REMOTE_USER']) ?></h1>
    <hr>
    <h2>Roles</h2>
    <ul>
    <?php
      $headers = apache_request_headers();
      $roles = explode(",",$_SERVER['OIDC_CLAIM_roles']);
      foreach($roles as $role){
        echo '<li>' . $role . '</li>';
      }
    ?>
    </ul>
    <hr>
    <h2>Request Headers</h2>
    <pre><?php
      foreach ($headers as $header => $value) {
        echo "$header: $value\n";
      }
    ?>
    </pre>
  </body>
</html>
