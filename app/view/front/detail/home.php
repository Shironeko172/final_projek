<style>
    body {
        font-family: urw !important;
    }

    .thecard {
        position: relative;
        width: auto;
        height: 100%;
        color: #fff;
        background: transparent;
        overflow: hidden;
        border-top: 1px solid rgba(255, 49, 49, 0.5);
        border-right: 1px solid rgba(0, 255, 255, 0.5);
        border-bottom: 1px solid rgba(57, 255, 20, 0.5);
        border-left: 1px solid rgba(255, 255, 113, 0.5);
        font-family: sans-serif;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        padding: 1em;
        margin-bottom: 30px;
        margin-top: 10px;
    }

    p {
        font-size: 0.95rem;
        text-align: center;
    }

    span {
        position: absolute;
        border-radius: 100vmax;
    }

    .top {
        top: 0;
        left: 0;
        width: 0;
        height: 5px;
        background: linear-gradient(90deg,
                transparent 50%,
                rgba(255, 49, 49, 0.5),
                rgb(255, 49, 49));
    }

    .bottom {
        right: 0;
        bottom: 0;
        height: 5px;
        background: linear-gradient(90deg,
                rgb(57, 255, 20),
                rgba(57, 255, 20, 0.5),
                transparent 50%);
    }

    .right {
        top: 0;
        right: 0;
        width: 5px;
        height: 0;
        background: linear-gradient(180deg,
                transparent 30%,
                rgba(0, 255, 255, 0.5),
                rgb(0, 255, 255));
    }

    .left {
        left: 0;
        bottom: 0;
        width: 5px;
        height: 0;
        background: linear-gradient(180deg,
                rgb(255, 255, 113),
                rgba(255, 255, 113, 0.5),
                transparent 70%);
    }

    .top {
        animation: animateTop 5s ease-in-out infinite;
    }

    .bottom {
        animation: animateBottom 5s ease-in-out infinite;
    }

    .right {
        animation: animateRight 5s ease-in-out infinite;
    }

    .left {
        animation: animateLeft 5s ease-in-out infinite;
    }

    @keyframes animateTop {
        25% {
            width: 100%;
            opacity: 1;
        }

        30%,
        100% {
            opacity: 0;
        }
    }

    @keyframes animateBottom {

        0%,
        50% {
            opacity: 0;
            width: 0;
        }

        75% {
            opacity: 1;
            width: 100%;
        }

        76%,
        100% {
            opacity: 0;
        }
    }

    @keyframes animateRight {

        0%,
        25% {
            opacity: 0;
            height: 0;
        }

        50% {
            opacity: 1;
            height: 100%;
        }

        55%,
        100% {
            height: 100%;
            opacity: 0;
        }
    }

    @keyframes animateLeft {

        0%,
        75% {
            opacity: 0;
            bottom: 0;
            height: 0;
        }

        100% {
            opacity: 1;
            height: 100%;
        }
    }

    .thefoto {
        background-position: center;
        background-repeat: no-repeat;
        width: 500px;
        height: 510px;
        margin-left: 30px;
        <?php foreach ($hh as $dta) { ?>background-image: url("<?= base_url($dta->gambar_url) ?>");
        <?php } ?>
    }

    .thejudul {
        font-family: Doppio One;
        font-size: 43px;
        font-style: normal;
        font-weight: 400;
        animation: judulna 5s linear infinite;
    }

    @keyframes judulna {

        0%,
        30% {
            color: #2A63E0;
        }

        60% {
            color: #258C25;
        }

        100% {
            color: #C70039;
        }
    }

    .garis {
        background-color: #000000;
        box-sizing: content-box;
        width: 100%;
        height: 25px;
        border-radius: 100px;
        color: white;
        width: 645px;
        animation: ergebe 5s linear infinite;
    }

    @keyframes ergebe {

        0%,
        30% {
            background-color: #C70039;
        }

        50% {
            background-color: #258C25;
        }

        100% {
            background-color: #2A63E0;
        }

    }

    .tabel1 {
        font-size: 21px;
        padding: 10px 20px;
    }

    tr,
    td {
        padding: 10px 10px;
        font-size: 21px;
    }

    .playstation {
        border: 8px solid;
        color: #2A63E0;
        border-radius: 0%;
        border-image: repeating-linear-gradient(135deg, #2A63E0 0 30px) 8;
        -webkit-mask:
            conic-gradient(from 180deg at top 3px right 3px, #0000 90deg, #000 0) var(--_i, 200%) 0 /200% var(--_i, 3px) border-box no-repeat,
            conic-gradient(at bottom 3px left 3px, #0000 90deg, #000 0) 0 var(--_i, 200%)/var(--_i, 3px) 200% border-box no-repeat,
            linear-gradient(#000 0 0) padding-box no-repeat;
        transition: .3s, -webkit-mask-position .3s .3s;
        padding: 0px 0px;
    }

    .playstation:hover {
        --_i: 100%;
        color: #ffffff;
        transition: .3s, -webkit-mask-size .3s .3s;
        text-decoration: none;
        border-radius: 0%;
    }

    .xbox {
        border: 8px solid;
        color: #258C25;
        border-radius: 0%;
        border-image: repeating-linear-gradient(135deg, #258C25 0 30px) 8;
        -webkit-mask:
            conic-gradient(from 180deg at top 3px right 3px, #0000 90deg, #000 0) var(--_i, 200%) 0 /200% var(--_i, 3px) border-box no-repeat,
            conic-gradient(at bottom 3px left 3px, #0000 90deg, #000 0) 0 var(--_i, 200%)/var(--_i, 3px) 200% border-box no-repeat,
            linear-gradient(#000 0 0) padding-box no-repeat;
        transition: .3s, -webkit-mask-position .3s .3s;
        padding: 0px 0px;
    }

    .xbox:hover {
        --_i: 100%;
        color: #ffffff;
        transition: .3s, -webkit-mask-size .3s .3s;
        text-decoration: none;
        border-radius: 0%;
    }

    .nintendo {
        border: 8px solid;
        color: #C70039;
        border-radius: 0%;
        border-image: repeating-linear-gradient(135deg, #C70039 0 30px) 8;
        -webkit-mask:
            conic-gradient(from 180deg at top 3px right 3px, #0000 90deg, #000 0) var(--_i, 200%) 0 /200% var(--_i, 3px) border-box no-repeat,
            conic-gradient(at bottom 3px left 3px, #0000 90deg, #000 0) 0 var(--_i, 200%)/var(--_i, 3px) 200% border-box no-repeat,
            linear-gradient(#000 0 0) padding-box no-repeat;
        transition: .3s, -webkit-mask-position .3s .3s;
        padding: 0px 0px;
    }

    .nintendo:hover {
        --_i: 100%;
        color: #ffffff;
        transition: .3s, -webkit-mask-size .3s .3s;
        text-decoration: none;
        border-radius: 0%;
    }
</style>
<div class="container-fluid" style="margin-top: -15px;">
    <div class="thecard">
        <div class="row mt-1">
            <div class="col-lg-12 mt-3 d-flex justify-content-center">
                <div class="thefoto"></div>
            </div>
            <div class="col-lg-12 mt-3 d-flex justify-content-center">
                <?php foreach ($hh as $dta) { ?>
                    <h1 class="thejudul"><?= $dta->model ?></h1>
                <?php } ?>
            </div>
            <div class="col-lg-12 mt-3 d-flex justify-content-center">
                <?php foreach ($hh as $dta) { ?>
                    <marquee class="garis" direction="left" scrollamount="10"><?= $dta->deskripsi ?></marquee>
                <?php } ?>
            </div>
            <div class="col-lg-12 mt-3" style="overflow-x:auto;">
                <table style="width: 100%;">
                    <tr>
                        <td>Tanggal Rilis</td>
                        <td>:</td>
                        <td><?= $dta->rilis ?></td>
                        <td>Diteruskan</td>
                        <td>:</td>
                        <td><?= $dta->progres ?></td>
                    </tr>
                    <tr>
                        <td>Berat</td>
                        <td>:</td>
                        <td><?= $dta->berat ?></td>
                        <td>Kapasitas Penyimpanan</td>
                        <td>:</td>
                        <td><?= $dta->kapasitas ?></td>
                    </tr>
                    <tr>
                        <td>Tipe Penyimpanan</td>
                        <td>:</td>
                        <td><?= $dta->tipe ?></td>
                        <td>Bandwidth Penyimpanan</td>
                        <td>:</td>
                        <td><?= $dta->bandwidth ?></td>
                    </tr>
                    <tr>
                        <td>Disc Slot</td>
                        <td>:</td>
                        <td><?= $dta->cd ?></td>
                        <td>Core CPU</td>
                        <td>:</td>
                        <td><?= $dta->cores ?></td>
                    </tr>
                    <tr>
                        <td>Threads CPU</td>
                        <td>:</td>
                        <td><?= $dta->threads ?></td>
                        <td>Clock Speed CPU</td>
                        <td>:</td>
                        <td><?= $dta->clock_speed ?></td>
                    </tr>
                    <tr>
                        <td>Core GPU</td>
                        <td>:</td>
                        <td><?= $dta->cores_gpu ?></td>
                        <td>Threads GPU</td>
                        <td>:</td>
                        <td><?= $dta->threads_gpu ?></td>
                    </tr>
                    <tr>
                        <td>Clock speed GPU</td>
                        <td>:</td>
                        <td><?= $dta->clock_speed_gpu ?></td>
                        <td>Ray Tracing</td>
                        <td>:</td>
                        <td><?= $dta->RayTracing ?></td>
                    </tr>
                    <tr>
                        <td>Memori</td>
                        <td>:</td>
                        <td><?= $dta->ram ?></td>
                        <td>Power Supply</td>
                        <td>:</td>
                        <td><?= $dta->power ?></td>
                    </tr>
                    <tr>
                        <td>Ports</td>
                        <td>:</td>
                        <td colspan="3"><?= $dta->ports ?>, <?= $dta->port2 ?>, <?= $dta->port3 ?>, <?= $dta->port4 ?></td>
                    </tr>
                    <tr>
                        <td>Jaringan</td>
                        <td>:</td>
                        <td><?= $dta->ethernet ?>, <?= $dta->wifi ?>, <?= $dta->bluetooth ?></td>
                    </tr>
                    <tr>
                        <td>Penyimpanan Di Upgrade</td>
                        <td>:</td>
                        <td><?= $dta->diupgrade ?></td>
                        <td>Perluas Penyimpanan</td>
                        <td>:</td>
                        <td><?= $dta->diperluas ?></td>
                    </tr>
                    <tr>
                        <td>Penyimpanan Usb</td>
                        <td>:</td>
                        <td colspan="3"><?= $dta->usbmemory ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <span class="top"></span>
        <span class="right"></span>
        <span class="bottom"></span>
        <span class="left"></span>
    </div>
    <div class="row mb-4">
        <div class="col-lg-1"><a href="<?= base_url('home') ?>" class="btn btn-outline-light"><i class="bi bi-arrow-left"></i> Back</a></div>
        <div class="col-lg-11">
            <?php foreach ($gg as $ggg) { ?>
                <a href="<?= base_url('detail/isidata/') ?><?= $ggg->id ?>" class="playstation btn"><?= $ggg->model ?></a>
            <?php }
            foreach ($ss as $sss) { ?>
                <a href="<?= base_url('detail/isidata/') ?><?= $sss->id ?>" class="xbox btn"><?= $sss->model ?></a>
            <?php }
            foreach ($dd as $ddd) { ?>
                <a href="<?= base_url('detail/isidata/') ?><?= $ddd->id ?>" class="nintendo btn"><?= $ddd->model ?></a>
            <?php } ?>
        </div>
    </div>
</div>