<?= $this->extend('/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <table class="table is-hoverable is-fullwidth is-center">
        <?php if (isset($sukses)):?>
            <div class="notification is-warning">
                <?= $sukses; ?>
            </div>
            <?php endif;?>
        <div class="column is-half"><p>Daftar Mahasiswa</p></div>
        <br>
        <thead>
            <tr style="color: black; background-color: #B4D4FF;">
                <th>NIM</th>
                <th>NAMA</th>
                <th>PROGRAM STUDI</th>
                <th>KONSENTRASI</th>
                <th>PILIHAN</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $m): ?>
            <tr>
                <td><?= $m['nim']?></td>
                <td><?= $m['nama']?></td>
                <td><?= $m['program_studi']?></td>
                <td><?= $m['konsentrasi']?></td>
                <td><a href="/editMahasiswa/<?= $m['nim']?>"><button class="button is-info">Edit</button></a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection('content'); ?>