<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<h1><?php echo $judul;?></h1>

<?php foreach($kategori as $key => $value):?>
<h2><?php echo $value['kategori'];?></h2>
<?php endforeach;?>

<h1><?php echo $kategori[1]['kategori'];?></h1>

<?= $this->endSection() ?>