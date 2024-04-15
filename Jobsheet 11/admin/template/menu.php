<!-- Praktikum 3. Folder Template
Buat satu file baru bernama menu.php di dalam folder template. Ketikkan kode di bawah ini
-->

<!DOCTYPE html>
<html lang="en">
<body>
<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Aplikasi Kantor Siapa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="index.php">
                        <svg class="b1">
                            <use xlink:href="#house-fill" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="index.php?page=anggota">
                        <svg class="b1">
                            <use xlink:href="#people" />
                        </svg>
                        Anggota
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="index.php?page=jabatan">
                        <svg class="b">
                            <use xlink:href="#puzzle" />
                        </svg>
                        Jabatan
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <svg class="b1">
                            <use xlink:href="#gear-wide-connected" />
                        </svg>
                        Settings
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="logout.php">
                        <svg class="b1">
                            <use xlink:href="#door-closed" />
                        </svg>
                        Log out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>