<div id="top" class="row mb-3 col">
    <div class="col">
        <h3>Tambah Data Bagian</h3>
    </div>
    <div class="col">
        <a href="?page=bagian" class="btn btn-primary float-end">
            <i class="fa fa-arrow-circle-left"></i>
            Kembali
        </a>
    </div>
</div>
<div id="pesan" class="row mb-3 col">
    <div class="col">
        <?php
        print_r($_POST);
        ?>
    </div>
</div>
<div id="inputan" class="row mb-3 col">
    <div class="col">
        <div class="card px-3">
            <form action="" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Bagian</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Misal : HRD" required>
            </div>
        <div class="col mb-3">
            <button class="btn btn-success" type="submit" name="simpan_button">
                <i class="fa fa-save"></i>
                Simpan
            </button>
        </div>
            </form>
        </div>
    </div>
</div>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window, location.href);
    }
</script>