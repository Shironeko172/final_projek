<style>
    .section {
        background-image: url('<?= base_url("media/banner.png") ?>');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        width: auto;
        height: 500px;
    }

    .text {
        text-shadow: 0px 0px 0px black, 0 0 0.2em black;
        justify-content: center;
        display: flex;
        padding-top: 200px;
    }

    .disini {
        padding-top: 0px !important;
    }

    .filter-container {
        font-size: 40px;
    }

    .kategori {
        border: none;
        background: none;
        cursor: pointer;
    }

    .content {
        width: 500px;
        height: 322px;
        box-shadow: 4px 4px 4px 0px #2A63E0;
        animation: jatuh 1s ease-in-out forwards;
    }

    @keyframes jatuh {
        0% {
            transform: translateY(-5%);
        }

        100% {
            transform: translateY(0);
        }
    }

    .content:hover {
        box-shadow: 8px 8px 8px 0px #2A63E0;
    }

    .img-content {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        width: 500px;
        height: 268px;
    }

    .judul-content {
        font-size: 30px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        color: #ffffff;
    }

    .ps {
        color: #2A63E0;
    }

    .xbox {
        color: #258C25;
    }

    .nintendo {
        color: #C70039;
    }

    .item {
        margin-bottom: 30px;
        display: none;
    }

    .show {
        display: block;
    }
</style>
<div class="section">
    <h1 class="text">SELAMAT DATANG</h1>
    <h2 class="text disini">DISINI</h2>
</div>
<div class="container mt-4">
    <div class="filter-container">
        <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
                <!-- <button hidden class="kategori ps" data-filter="all" id="semua">all</button> -->
                <button class="kategori ps" data-filter="PLAYSTATION" id="theps">PlayStation</button>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
                <button class="kategori xbox" data-filter="XBOX">XBOX</button>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
                <button class="kategori nintendo" data-filter="NINTENDO">Nintendo</button>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-4">
    <div class="row">
        <?php foreach ($thedata as $tda) { ?>
            <div class="col-lg-6 d-flex justify-content-center">
                <a href="<?= base_url('detail/isidata/')?><?= $tda->id ?>" class="content item <?= $tda->merek ?>" style="text-decoration: none">
                    <img src="<?= base_url($tda->gmbr) ?>" class="img-content" />
                    <div class="judul-content d-flex justify-content-center pt-2"><?= $tda->model ?></div>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
<br><br>