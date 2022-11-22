<?= $this->extend('layout/sidenav_konsumen'); ?>
<?= $this->section('konsumen'); ?>
<div class="container-fluid">
    <link rel="stylesheet" href="cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <div class="page-title">
        <div class="row">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3 class="text-dark mb-0">Reservasi Kamar</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#" style="background: rgb(34,146,43);"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard/">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Reservasi</li>
                </ol>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <p>Berikut adalah Reservasi Kamar Hotel yang Anda Pesan</p>
                            <a href="/createreservasi/" class="btn btn-primary btn-sm">Buat Reservasi</a>
                        </div>
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0" id="mytable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tipe</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($customer as $k) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $k['nama'] ?></td>
                                            <td><?= $k['tipe'] ?></td>
                                            <td><?= $k['status'] ?></td>
                                            <?php if ($k['status'] == 'Checked-Out') : ?>
                                                <td><a href="/check_out/<?= $k['id'] ?>"><button disabled>Check Out</button></td>
                                            <?php else : ?>
                                                <td><a href="/check_out/<?= $k['id'] ?>"><button>Check Out</button></td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js">
    $(document).ready(function() {
        $('#mytable').DataTable();
    });
</script>
<?= $this->endSection(); ?>