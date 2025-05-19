<?php include('header.php'); ?>

<div class="container mt-5">
    <!-- Section Title for Latihan Praktikum -->
    <h2 class="text-center mb-4">Latihan Praktikum</h2>

<!-- Button trigger modal - Latihan Praktikum 1 -->
<div class="mb-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#LatihanPraktikum1">
        Latihan Praktikum 1
    </button>
</div>

<!-- Modal 1 -->
<div class="modal fade" id="LatihanPraktikum1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Latihan Praktikum 1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                $bil = 1;
                while ($bil <= 3) {
                    echo "Nilai Sekarang adalah $bil <br>";
                    $bil++;
                }
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

    <!-- Button trigger modal - Praktikum 2 -->
    <div class="mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Praktikum2">
        Latihan Praktikum 2
        </button>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="Praktikum2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    $bil = 1;
                    while ($bil <= 3) {
                        echo $bil . "<br />";
                        $bil++;
                    }
                    echo "Nilai bilangan sekarang adalah: $bil";
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal - Praktikum 3 -->
    <div class="mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Praktikum3">
        Latihan Praktikum 3
        </button>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="Praktikum3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    $bil = 5;
                    while ($bil <= 100) {
                        if ($bil % 10 == 0) echo $bil . "<br />";
                        $bil++;
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal - Praktikum 4 -->
    <div class="mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Praktikum4">
        Latihan Praktikum 4
        </button>
    </div>

    <!-- Modal 4 -->
    <div class="modal fade" id="Praktikum4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    $bil = 5;
                    while ($bil <= 100) {
                        if ($bil % 10 == 0) echo $bil . "<br />";
                        $bil++;
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal - Praktikum 5 -->
    <div class="mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Praktikum5">
        Latihan Praktikum 5
        </button>
    </div>

    <!-- Modal 5 -->
    <div class="modal fade" id="Praktikum5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    $bilangan = 0;
                    for ($a = 1; $a <= 5; $a++) {
                        echo "Bilangan Sekarang adalah $bilangan <br>";
                        $bilangan = $bilangan + $a;
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal - Praktikum 6 -->
    <div class="mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Praktikum6">
        Latihan Praktikum 6
        </button>
    </div>

    <!-- Modal 6 -->
    <div class="modal fade" id="Praktikum6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    for ($a = 1; $a <= 3; $a++) {
                        for ($b = 1; $b <= 2; $b++) {
                            echo "Nilai a = " . $a . " Nilai b = " . $b . "<br />";
                        }
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal - Praktikum 7 -->
    <div class="mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Praktikum7">
        Latihan Praktikum 7
        </button>
    </div>

    <!-- Modal 7 -->
    <div class="modal fade" id="Praktikum7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    $d = 1;
                    do {
                        echo "Perulangan ke-$d <br>";
                        $d++;
                    } while ($d <= 5);
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Section Title for Tugas Praktikum -->
    <h2 class="text-center mb-4">Tugas Praktikum</h2>

    <!-- Button trigger modal - Tugas Praktikum 1 -->
    <div class="mb-3">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#TugasPraktikum1">
            Tugas Praktikum 1
        </button>
    </div>

    <!-- Modal Tugas Praktikum 1 -->
    <div class="modal fade" id="TugasPraktikum1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tugas Praktikum 1</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    $bil = 5;
                    while ($bil <= 100) {
                        if ($bil % 10 == 0) echo $bil . "<br />";
                        $bil++;
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal - Tugas Praktikum 2 -->
    <div class="mb-3">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#TugasPraktikum2">
            Tugas Praktikum 2
        </button>
    </div>

    <!-- Modal Tugas Praktikum 2 -->
    <div class="modal fade" id="TugasPraktikum2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tugas Praktikum 2</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    $bilangan = 0;
                    for ($a = 1; $a <= 5; $a++) {
                        echo "Bilangan Sekarang adalah $bilangan <br>";
                        $bilangan = $bilangan + $a;
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal - Tugas Praktikum 3 -->
    <div class="mb-3">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#TugasPraktikum3">
            Tugas Praktikum 3
        </button>
    </div>

    <!-- Modal Tugas Praktikum 3 -->
    <div class="modal fade" id="TugasPraktikum3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tugas Praktikum 3</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    $bil = 10;
                    while ($bil <= 50) {
                        if ($bil % 10 == 0) echo $bil . "<br />";
                        $bil++;
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</html>
