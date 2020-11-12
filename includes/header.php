<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">PHP галерея</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="/">Головна</a>
    <a class="p-2 text-dark" href="/feedback.php">Форма зворотнього зв'язку</a>
  </nav>
  <?php if (isset($_COOKIE['auth'])): ?>
    <a class="btn btn-outline-primary" href="/auth.php?exit">Вихід</a>
  <?php else: ?>
    <a class="btn btn-outline-primary" href="/auth.php">Вхід</a>
  <?php endif ?>
</div>