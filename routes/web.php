<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/','/login');

require __DIR__ . '/web/auth.php';
require __DIR__ . '/web/alat.php';
require __DIR__ . '/web/peminjaman.php';
require __DIR__ . '/web/approval.php';
