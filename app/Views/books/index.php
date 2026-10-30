<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container py-4">

    <h1 class="h3 mb-3">Data Buku</h1>

    <?php if ($message = session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= esc($message) ?></div>
    <?php endif ?>

    <?php if ($message = session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= esc($message) ?></div>
    <?php endif ?>

    <a href="<?= site_url('books/new') ?>"
       class="btn btn-primary mb-3">
        Tambah Buku
    </a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>No.</th>
                    <th>Kode</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Penulis</th>
                    <th>Stok Total</th>
                    <th>Stok Tersedia</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
            <?php if (empty($books)): ?>
                <tr>
                    <td colspan="9" class="text-center">
                        Belum ada data buku.
                    </td>
                </tr>
            <?php else: ?>
                <?php foreach ($books as $i => $book): ?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><?= esc($book['code']) ?></td>
                        <td><?= esc($book['title']) ?></td>
                        <td><?= esc($book['category_name']) ?></td>
                        <td><?= esc($book['author']) ?></td>
                        <td><?= esc($book['stock_total']) ?></td>
                        <td><?= esc($book['stock_available']) ?></td>
                        <td>
                            <?php if ((int) $book['is_active'] === 1): ?>
                                <span class="badge bg-success">Aktif</span>
                            <?php else: ?>
                                <span class="badge bg-secondary">Nonaktif</span>
                            <?php endif ?>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-warning mb-1"
                               href="<?= site_url('books/edit/' . $book['id']) ?>">
                                Edit
                            </a>

                            <form class="d-inline"
                                  method="post"
                                  action="<?= site_url('books/delete/' . $book['id']) ?>"
                                  onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                                <?= csrf_field() ?>

                                <button type="submit"
                                        class="btn btn-sm btn-danger mb-1">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
            </tbody>
        </table>
    </div>

    <a href="<?= site_url('categories') ?>" class="btn btn-outline-secondary">
        Kembali ke Data Kategori
    </a>

</div>

<?= $this->endSection() ?>