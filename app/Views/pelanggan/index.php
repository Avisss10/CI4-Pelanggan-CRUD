<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .main-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .header-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 20px 20px 0 0;
            padding: 2rem;
            margin: -1rem -1rem 0 -1rem;
        }
        
        .header-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .header-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 0;
        }
        
        .add-btn {
            background: linear-gradient(135deg, #ff6b6b, #ffa726);
            border: none;
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(255, 107, 107, 0.3);
        }
        
        .add-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(255, 107, 107, 0.4);
            background: linear-gradient(135deg, #ff5252, #ff9800);
        }
        
        .table-container {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            background: white;
        }
        
        .table {
            margin-bottom: 0;
        }
        
        .table thead th {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: none;
            padding: 1rem;
            font-size: 0.9rem;
        }
        
        .table tbody tr {
            transition: all 0.3s ease;
        }
        
        .table tbody tr:hover {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
            transform: scale(1.01);
        }
        
        .table tbody td {
            padding: 1rem;
            vertical-align: middle;
            border-color: rgba(0, 0, 0, 0.1);
        }
        
        .action-btn {
            border-radius: 20px;
            padding: 8px 16px;
            font-size: 0.85rem;
            font-weight: 600;
            margin: 0 2px;
            transition: all 0.3s ease;
            border: none;
        }
        
        .btn-edit {
            background: linear-gradient(135deg, #ffc107, #ff8f00);
            color: white;
        }
        
        .btn-edit:hover {
            background: linear-gradient(135deg, #ffb300, #ff6f00);
            transform: translateY(-1px);
            box-shadow: 0 6px 15px rgba(255, 193, 7, 0.4);
            color: white;
        }
        
        .btn-delete {
            background: linear-gradient(135deg, #dc3545, #c82333);
            color: white;
        }
        
        .btn-delete:hover {
            background: linear-gradient(135deg, #c82333, #bd2130);
            transform: translateY(-1px);
            box-shadow: 0 6px 15px rgba(220, 53, 69, 0.4);
            color: white;
        }
        
        .gender-badge {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .gender-male {
            background: linear-gradient(135deg, #2196f3, #21cbf3);
            color: white;
        }
        
        .gender-female {
            background: linear-gradient(135deg, #e91e63, #f06292);
            color: white;
        }
        
        .row-number {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 0.9rem;
        }
        
        .stats-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }
        
        .stats-number {
            font-size: 2.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .stats-label {
            color: #666;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .header-title {
                font-size: 2rem;
            }
            
            .table-responsive {
                border-radius: 15px;
            }
            
            .action-btn {
                padding: 6px 12px;
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="main-container p-4">
            <!-- Header Section -->
            <div class="header-section">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1 class="header-title">
                            <i class="fas fa-users me-3"></i>Data Pelanggan
                        </h1>
                        <p class="header-subtitle">Kelola data pelanggan dengan mudah dan efisien</p>
                    </div>
                    <div class="col-md-4 text-end">
                        <div class="btn-group" role="group">
                            <a href="/pelanggan/create" class="btn add-btn">
                                <i class="fas fa-plus me-2"></i>Tambah Pelanggan
                            </a>
                            <button type="button" class="btn btn-success" onclick="exportToExcel()" style="border-radius: 50px; margin-left: 10px;">
                                <i class="fas fa-file-excel me-2"></i>Export Excel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Search & Filter Section -->
            <div class="row mt-4">
                <div class="col-md-8">
                    <div class="input-group">
                        <span class="input-group-text bg-gradient" style="background: linear-gradient(135deg, #667eea, #764ba2); color: white; border: none;">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text" class="form-control" id="searchInput" placeholder="Cari nama, email, atau no HP..." 
                               style="border-left: none; padding: 12px;">
                    </div>
                </div>
                <div class="col-md-4">
                    <select class="form-select" id="filterGender" style="padding: 12px;">
                        <option value="">Semua Gender</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>

            <!-- Stats Section -->
            <?php
            $totalPelanggan = count($pelanggan);
            $lakiLaki = 0;
            $perempuan = 0;
            
            foreach($pelanggan as $p) {
                if(strtolower($p['jenis_kelamin']) == 'laki-laki') {
                    $lakiLaki++;
                } else {
                    $perempuan++;
                }
            }
            ?>
            
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="stats-card text-center">
                        <div class="stats-number"><?= $totalPelanggan ?></div>
                        <div class="stats-label">Total Pelanggan</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stats-card text-center">
                        <div class="stats-number"><?= $lakiLaki ?></div>
                        <div class="stats-label">Laki-laki</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stats-card text-center">
                        <div class="stats-number"><?= $perempuan ?></div>
                        <div class="stats-label">Perempuan</div>
                    </div>
                </div>
            </div>
            
            <!-- Table Section -->
            <div class="table-container">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><i class="fas fa-hashtag me-2"></i>#</th>
                                <th><i class="fas fa-user me-2"></i>Nama</th>
                                <th><i class="fas fa-envelope me-2"></i>Email</th>
                                <th><i class="fas fa-phone me-2"></i>No HP</th>
                                <th><i class="fas fa-map-marker-alt me-2"></i>Alamat</th>
                                <th><i class="fas fa-venus-mars me-2"></i>Gender</th>
                                <th><i class="fas fa-cogs me-2"></i>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($pelanggan as $index => $p): ?>
                            <tr>
                                <td><div class="row-number"><?= $index + 1 ?></div></td>
                                <td><strong><?= esc($p['nama']) ?></strong></td>
                                <td><?= esc($p['email']) ?></td>
                                <td><?= esc($p['no_hp']) ?></td>
                                <td><?= esc($p['alamat']) ?></td>
                                <td>
                                    <span class="gender-badge <?= strtolower($p['jenis_kelamin']) == 'laki-laki' ? 'gender-male' : 'gender-female' ?>">
                                        <?= esc($p['jenis_kelamin']) ?>
                                    </span>
                                </td>
                                <td>
                                    <a href="/pelanggan/edit/<?= $p['id'] ?>" class="btn btn-edit action-btn">
                                        <i class="fas fa-edit me-1"></i>Edit
                                    </a>
                                    <a href="/pelanggan/delete/<?= $p['id'] ?>" onclick="return confirm('Hapus data?')" class="btn btn-delete action-btn">
                                        <i class="fas fa-trash me-1"></i>Hapus
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Pagination -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <div class="text-muted">
                    Menampilkan <?= count($pelanggan) ?> dari <?= $totalPelanggan ?> data
                </div>
                <nav>
                    <ul class="pagination pagination-sm">
                        <li class="page-item">
                            <a class="page-link" href="#" style="border-radius: 50px;">Previous</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#" style="border-radius: 50px;">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" style="border-radius: 50px;">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" style="border-radius: 50px;">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" style="border-radius: 50px;">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Search functionality
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            const filterGender = document.getElementById('filterGender').value;
            filterTable(searchTerm, filterGender);
        });
        
        // Filter functionality
        document.getElementById('filterGender').addEventListener('change', function() {
            const filterGender = this.value;
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            filterTable(searchTerm, filterGender);
        });
        
        function filterTable(searchTerm, filterGender) {
            const tbody = document.querySelector('tbody');
            const rows = tbody.getElementsByTagName('tr');
            
            for (let i = 0; i < rows.length; i++) {
                const row = rows[i];
                const nama = row.cells[1].textContent.toLowerCase();
                const email = row.cells[2].textContent.toLowerCase();
                const noHp = row.cells[3].textContent.toLowerCase();
                const gender = row.cells[5].textContent.trim();
                
                const matchesSearch = nama.includes(searchTerm) || 
                                    email.includes(searchTerm) || 
                                    noHp.includes(searchTerm);
                
                const matchesFilter = filterGender === '' || gender === filterGender;
                
                if (matchesSearch && matchesFilter) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
            
            // Update row numbers
            updateRowNumbers();
        }
        
        function updateRowNumbers() {
            const tbody = document.querySelector('tbody');
            const visibleRows = Array.from(tbody.getElementsByTagName('tr'))
                .filter(row => row.style.display !== 'none');
            
            visibleRows.forEach((row, index) => {
                row.cells[0].querySelector('.row-number').textContent = index + 1;
            });
        }
        
        // Confirm delete with better styling
        function confirmDelete(url, nama) {
            if (confirm(`Apakah Anda yakin ingin menghapus data ${nama}?`)) {
                window.location.href = url;
            }
        }
        
        // Export to Excel functionality
        function exportToExcel() {
            const table = document.querySelector('table');
            const wb = XLSX.utils.table_to_book(table, {sheet: "Data Pelanggan"});
            XLSX.writeFile(wb, "data_pelanggan.xlsx");
        }
        
        // Add loading animation
        function showLoading() {
            const loadingHtml = `
                <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            `;
            document.querySelector('.table-container').innerHTML = loadingHtml;
        }
    </script>
    
    <!-- Include XLSX library for Excel export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
</body>
</html>