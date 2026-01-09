<div class="d-flex justify-content-between align-items-center mb-3">
  <h3>Daftar Post</h3>
  <a href="/projects/app_oop_modular/post/create" class="btn btn-success">
    + Tambah Post
  </a>
</div>

<form class="mb-3" method="GET">
  <input type="text" name="s" class="form-control" placeholder="Cari judul...">
</form>

<div class="row">
<?php if ($posts->num_rows > 0): ?>
  <?php while($p = $posts->fetch_assoc()): ?>
    <div class="col-md-4 mb-3">
      <div class="card bg-dark text-white h-100">
        <div class="card-body">
          <h5><?= htmlspecialchars($p['title']) ?></h5>
          <p><?= substr(htmlspecialchars($p['content']),0,80) ?>...</p>
        </div>
        <div class="card-footer d-flex justify-content-between">
          <a href="/projects/app_oop_modular/post/edit/<?= $p['id'] ?>" class="btn btn-warning btn-sm">Edit</a>

          <a href="/projects/app_oop_modular/post/delete/<?= $p['id'] ?>"
             class="btn btn-danger btn-sm"
             onclick="return confirm('Yakin hapus post ini?')">
             Delete
          </a>
        </div>
      </div>
    </div>
  <?php endwhile ?>
<?php else: ?>
  <p class="text-muted">Belum ada data</p>
<?php endif ?>
</div>
