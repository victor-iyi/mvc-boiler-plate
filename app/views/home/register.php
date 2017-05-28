<h3> Registration Form </h3>
<form action="" method="POST" class="form">
  <ul>
    <li>
      <label for="firstname">Firstname</label>
      <input type="text" name="firstname" id="firstname" value="<?= old('firstname'); ?>">
    </li>
    <li>
      <label for="lastname">Lastname</label>
      <input type="text" name="lastname" id="lastname" value="<?= old('lastname'); ?>">
    </li>
    <li>
      <label for="username">Username</label>
      <input type="text" name="username" id="username" value="<?= old('username'); ?>">
    </li>
    <li>
      <label for="password">Password</label>
      <input type="text" name="password" id="password" value="<?= old('password'); ?>">
    </li>
    <li>
      <input type="submit" value="Sign up">
    </li>
  </ul>
</form>