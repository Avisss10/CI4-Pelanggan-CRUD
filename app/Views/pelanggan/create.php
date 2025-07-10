<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 2rem 0;
        }
        
        .form-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            overflow: hidden;
        }
        
        .form-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
            text-align: center;
            position: relative;
        }
        
        .form-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.1)"/><circle cx="10" cy="50" r="0.5" fill="rgba(255,255,255,0.1)"/><circle cx="90" cy="30" r="0.5" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }
        
        .form-header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1;
        }
        
        .form-header p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 0;
            position: relative;
            z-index: 1;
        }
        
        .form-body {
            padding: 2.5rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .form-control, .form-select {
            border: 2px solid #e0e0e0;
            border-radius: 15px;
            padding: 12px 20px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
        }
        
        .form-control:focus, .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
            background: white;
            transform: translateY(-1px);
        }
        
        .input-group {
            position: relative;
        }
        
        .input-group-text {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            color: white;
            border-radius: 15px 0 0 15px;
            padding: 12px 15px;
            font-weight: 600;
        }
        
        .input-group .form-control {
            border-left: none;
            border-radius: 0 15px 15px 0;
        }
        
        .radio-group {
            display: flex;
            gap: 1.5rem;
            margin-top: 0.5rem;
        }
        
        .radio-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 10px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
        }
        
        .radio-item:hover {
            border-color: #667eea;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.2);
        }
        
        .radio-item input[type="radio"] {
            margin: 0;
            width: 20px;
            height: 20px;
            accent-color: #667eea;
        }
        
        .radio-item input[type="radio"]:checked + .radio-label {
            color: #667eea;
            font-weight: 600;
        }
        
        .radio-item:has(input[type="radio"]:checked) {
            border-color: #667eea;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
        }
        
        .btn-submit {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            border-radius: 50px;
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
            width: 100%;
        }
        
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(102, 126, 234, 0.4);
            background: linear-gradient(135deg, #5a67d8, #6b46c1);
        }
        
        .btn-back {
            background: linear-gradient(135deg, #6c757d, #495057);
            border: none;
            border-radius: 50px;
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(108, 117, 125, 0.3);
            width: 100%;
            margin-right: 1rem;
        }
        
        .btn-back:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(108, 117, 125, 0.4);
            background: linear-gradient(135deg, #5a6268, #3d4043);
            color: white;
        }
        
        .form-floating {
            position: relative;
        }
        
        .form-floating > .form-control {
            height: calc(3.5rem + 2px);
            padding: 1rem 0.75rem;
        }
        
        .form-floating > label {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            padding: 1rem 0.75rem;
            pointer-events: none;
            border: 1px solid transparent;
            transform-origin: 0 0;
            transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
            color: #6c757d;
        }
        
        .error-message {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
            display: none;
        }
        
        .success-message {
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1rem;
            display: none;
        }
        
        .form-step {
            opacity: 0;
            transform: translateY(20px);
            animation: slideIn 0.5s ease forwards;
        }
        
        @keyframes slideIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .form-step:nth-child(1) { animation-delay: 0.1s; }
        .form-step:nth-child(2) { animation-delay: 0.2s; }
        .form-step:nth-child(3) { animation-delay: 0.3s; }
        .form-step:nth-child(4) { animation-delay: 0.4s; }
        .form-step:nth-child(5) { animation-delay: 0.5s; }
        .form-step:nth-child(6) { animation-delay: 0.6s; }
        
        @media (max-width: 768px) {
            .form-container {
                margin: 1rem;
                border-radius: 15px;
            }
            
            .form-header h1 {
                font-size: 2rem;
            }
            
            .form-body {
                padding: 1.5rem;
            }
            
            .radio-group {
                flex-direction: column;
                gap: 1rem;
            }
            
            .btn-back {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="form-container">
                    <!-- Header -->
                    <div class="form-header">
                        <h1><i class="fas fa-user-plus me-3"></i>Tambah Pelanggan</h1>
                        <p>Lengkapi formulir di bawah untuk menambah pelanggan baru</p>
                    </div>
                    
                    <!-- Form Body -->
                    <div class="form-body">
                        <div class="success-message" id="successMessage">
                            <i class="fas fa-check-circle me-2"></i>
                            Data pelanggan berhasil disimpan!
                        </div>
                        
                        <form action="/pelanggan/store" method="POST" id="customerForm">
                            <?= csrf_field() ?>
                            
                            <!-- Nama -->
                            <div class="form-group form-step">
                                <label for="nama" class="form-label">
                                    <i class="fas fa-user me-2"></i>Nama Lengkap
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <input type="text" 
                                           class="form-control" 
                                           id="nama" 
                                           name="nama" 
                                           placeholder="Masukkan nama lengkap"
                                           required>
                                </div>
                                <div class="error-message" id="namaError"></div>
                            </div>
                            
                            <!-- Email -->
                            <div class="form-group form-step">
                                <label for="email" class="form-label">
                                    <i class="fas fa-envelope me-2"></i>Email
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <input type="email" 
                                           class="form-control" 
                                           id="email" 
                                           name="email" 
                                           placeholder="contoh@email.com"
                                           required>
                                </div>
                                <div class="error-message" id="emailError"></div>
                            </div>
                            
                            <!-- No HP -->
                            <div class="form-group form-step">
                                <label for="no_hp" class="form-label">
                                    <i class="fas fa-phone me-2"></i>Nomor HP
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-phone"></i>
                                    </span>
                                    <input type="tel" 
                                           class="form-control" 
                                           id="no_hp" 
                                           name="no_hp" 
                                           placeholder="08xxxxxxxxxx"
                                           required>
                                </div>
                                <div class="error-message" id="noHpError"></div>
                            </div>
                            
                            <!-- Alamat -->
                            <div class="form-group form-step">
                                <label for="alamat" class="form-label">
                                    <i class="fas fa-map-marker-alt me-2"></i>Alamat
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                    <textarea class="form-control" 
                                              id="alamat" 
                                              name="alamat" 
                                              rows="3" 
                                              placeholder="Masukkan alamat lengkap"
                                              required></textarea>
                                </div>
                                <div class="error-message" id="alamatError"></div>
                            </div>
                            
                            <!-- Jenis Kelamin -->
                            <div class="form-group form-step">
                                <label class="form-label">
                                    <i class="fas fa-venus-mars me-2"></i>Jenis Kelamin
                                </label>
                                <div class="radio-group">
                                    <div class="radio-item">
                                        <input type="radio" 
                                               id="laki_laki" 
                                               name="jenis_kelamin" 
                                               value="Laki-laki" 
                                               required>
                                        <label for="laki_laki" class="radio-label">
                                            <i class="fas fa-mars me-2"></i>Laki-laki
                                        </label>
                                    </div>
                                    <div class="radio-item">
                                        <input type="radio" 
                                               id="perempuan" 
                                               name="jenis_kelamin" 
                                               value="Perempuan" 
                                               required>
                                        <label for="perempuan" class="radio-label">
                                            <i class="fas fa-venus me-2"></i>Perempuan
                                        </label>
                                    </div>
                                </div>
                                <div class="error-message" id="jenisKelaminError"></div>
                            </div>
                            
                            <!-- Buttons -->
                            <div class="form-group form-step">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="/pelanggan" class="btn btn-back">
                                            <i class="fas fa-arrow-left me-2"></i>Kembali
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-submit">
                                            <i class="fas fa-save me-2"></i>Simpan Data
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Form validation
        document.getElementById('customerForm').addEventListener('submit', function(e) {
            
            // Reset error messages
            document.querySelectorAll('.error-message').forEach(el => {
                el.style.display = 'none';
            });
            
            let isValid = true;
            
            // Validate nama
            const nama = document.getElementById('nama').value.trim();
            if (nama.length < 2) {
                showError('namaError', 'Nama harus minimal 2 karakter');
                isValid = false;
            }
            
            // Validate email
            const email = document.getElementById('email').value.trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                showError('emailError', 'Format email tidak valid');
                isValid = false;
            }
            
            // Validate no HP
            const noHp = document.getElementById('no_hp').value.trim();
            const phoneRegex = /^[0-9]{10,15}$/;
            if (!phoneRegex.test(noHp)) {
                showError('noHpError', 'Nomor HP harus 10-15 digit angka');
                isValid = false;
            }
            
            // Validate alamat
            const alamat = document.getElementById('alamat').value.trim();
            if (alamat.length < 5) {
                showError('alamatError', 'Alamat harus minimal 5 karakter');
                isValid = false;
            }
            
            // Validate jenis kelamin
            const jenisKelamin = document.querySelector('input[name="jenis_kelamin"]:checked');
            if (!jenisKelamin) {
                showError('jenisKelaminError', 'Pilih jenis kelamin');
                isValid = false;
            }
            
            if (isValid) {
                // Show loading state
                const submitBtn = document.querySelector('.btn-submit');
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Menyimpan...';
                submitBtn.disabled = true;
                
                // Simulate API call (replace with actual form submission)
                setTimeout(() => {
                    document.getElementById('successMessage').style.display = 'block';
                    
                    // Reset form
                    document.getElementById('customerForm').reset();
                    
                    // Reset button
                    submitBtn.innerHTML = '<i class="fas fa-save me-2"></i>Simpan Data';
                    submitBtn.disabled = false;
                    
                    // Redirect after 2 seconds
                    setTimeout(() => {
                        window.location.href = '/pelanggan';
                    }, 2000);
                }, 1000);
            }
        });
        
        function showError(elementId, message) {
            const errorElement = document.getElementById(elementId);
            errorElement.textContent = message;
            errorElement.style.display = 'block';
        }
        
        // Real-time validation
        document.getElementById('email').addEventListener('blur', function() {
            const email = this.value.trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (email && !emailRegex.test(email)) {
                showError('emailError', 'Format email tidak valid');
            } else {
                document.getElementById('emailError').style.display = 'none';
            }
        });
        
        document.getElementById('no_hp').addEventListener('input', function() {
            // Only allow numbers
            this.value = this.value.replace(/[^0-9]/g, '');
        });
        
        // Auto-format phone number
        document.getElementById('no_hp').addEventListener('blur', function() {
            const noHp = this.value.trim();
            const phoneRegex = /^[0-9]{10,15}$/;
            
            if (noHp && !phoneRegex.test(noHp)) {
                showError('noHpError', 'Nomor HP harus 10-15 digit angka');
            } else {
                document.getElementById('noHpError').style.display = 'none';
            }
        });
    </script>
</body>
</html>