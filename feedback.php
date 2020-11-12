<?php
if (isset($_POST['email']) && isset($_POST['message'])) {
  $chatId = '';
  $token = '';
  $text = urlencode($_POST['email']."\n".$_POST['message']);

  file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chatId}&parse_mode=html&text={$text}");
  $message = 'Дякуємо за ваше повідомлення!';
}
?>

<!DOCTYPE html>
<html lang="uk">
<?php include 'includes/head.php' ?>
<body>
  <?php include 'includes/header.php'; ?>
  <div class="container">
    <?php include 'includes/message.php' ?>
    <form method="POST">
      <div class="form-group">
        <label for="inputEmail">Введіть свій емейл</label>
        <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailWarning" placeholder="Ваш емейл">
        <small id="emailWarning" class="form-text text-muted">* Ми не передаємо нікуди ваші дані</small>
      </div>
      <div class="form-group">
        <label for="inputMessage">Ваше повідомлення</label>
        <textarea type="text" name="message" class="form-control" id="inputMessage" placeholder="Чим бажаєте поділитись?"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Відправити</button>
    </form>
  </div>
  <?php include 'includes/footer.php'; ?>
</body>
</html>
