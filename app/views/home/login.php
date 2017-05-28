<h3>Login</h3>
<form class="form" action="" method="POST">
  <ul>
    <li>
      <label for="username">Username: </label>
      <input type="text" name="username" id="username" value="<?= old('username'); ?>">
    </li>
    <li>
      <label for="password">Password: </label>
      <input type="text" name="password" id="password" value="<?= old('password'); ?>">
    </li>
    <li>
      <input type="submit" value="Login">
    </li>
  </ul>
</form>