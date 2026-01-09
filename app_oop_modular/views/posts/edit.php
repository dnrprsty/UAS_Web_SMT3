<div class="card bg-dark text-white mx-auto p-4" style="max-width:600px">
<h4 class="mb-3">Edit Post</h4>

<form method="POST">
  <input class="form-control mb-3" name="title"
         value="<?= htmlspecialchars($post['title']) ?>" required>

  <textarea class="form-control mb-3" name="content" rows="5" required><?= htmlspecialchars($post['content']) ?></textarea>

  <div class="d-flex justify-content-between">
    <a href="/projects/app_oop_modular/post/index" class="btn btn-secondary">Batal</a>
    <button class="btn btn-warning">Update</button>
  </div>
</form>
</div>
