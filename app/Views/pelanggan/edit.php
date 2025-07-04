<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Pelanggan</title>
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
            max-width: 600px;
            margin: auto;
        }
        
        .form-header {
            background: linear-gradient(135deg, #ff6b6b 0%, #ffa726 100%);
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
        
        .customer-info {
            background: linear-gradient(135deg, rgba(255, 107, 107, 0.1), rgba(255, 167, 38, 0.1));
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(255, 107, 107, 0.2);
        }
        
        .customer-info h3 {
            color: #ff6b6b;
            font-weight: 600;
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        .customer-info .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
            color: #666;
        }
        
        .customer-info .info-item i {
            width: 20px;
            color: #ff6b6b;
            margin-right: 10px;
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
            border-color: #ff6b6b;
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 107, 0.25);
            background: white;
            transform: translateY(-1px);
        }
        
        .input-group-text {
            background: linear-gradient(135deg, #ff6b6b, #ffa726);
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
            border-color: #ff6b6b;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(255, 107, 107, 0.2);
        }
        
        .radio-item input[type="radio"] {
            margin: 0;
            width: 20px;
            height: 20px;
            accent-color: #ff6b6b;
        }
        
        .radio-item input[type="radio"]:checked + .radio-label {
            color: #ff6b6b;
            font-weight: 600;
        }
        
        .radio-item:has(input[type="radio"]:checked) {
            border-color: #ff6b6b;
            background: linear-gradient(135deg, rgba(255, 107, 107, 0.1), rgba(255, 167, 38, 0.1));
        }
        
        .btn-update {
            background: linear-gradient(135deg, #ff6b6b, #ffa726);
            border: none;
            border-radius: 50px;
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(255, 107, 107, 0.3);
            width: 100%;
        }
        
        .btn-update:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(255, 107, 107, 0.4);
            background: linear-gradient(135deg, #ff5252, #ff9800);
        }
        
        .btn-back {
            background: linear-gradient(135deg, #6c757d, #495057);
            border: none;
            border-radius: 50px;
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            color: white;
            width: 100%;
            margin-top: 10px;
            text-align: center;
            display: inline-block;
            text-decoration: none;
        }
        
        .btn-back:hover {
            background: linear-gradient(135deg, #5a6268, #343a40);
            text-decoration: none;
            color: white;
        }
  </style>
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <h1>Edit Pelanggan</h1>
            <p>Update data pelanggan dengan mudah dan cepat</p>
        </div>
        <div class="form-body">
            <form method="post" action="/pelanggan/update/<?= $pelanggan['id'] ?>">
                <div class="form-group">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" value="<?= esc($pelanggan['nama']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="<?= esc($pelanggan['email']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="no_hp" class="form-label">No. HP</label>
                    <input type="text" id="no_hp" name="no_hp" class="form-control" value="<?= esc($pelanggan['no_hp']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea id="alamat" name="alamat" class="form-control" rows="3" required><?= esc($pelanggan['alamat']) ?></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Jenis Kelamin</label>
                    <div class="radio-group">
                        <label class="radio-item">
                            <input type="radio" name="jenis_kelamin" value="Laki-laki" <?= $pelanggan['jenis_kelamin'] == 'Laki-laki' ? 'checked' : '' ?> required>
                            <span class="radio-label">Laki-laki</span>
                        </label>
                        <label class="radio-item">
                            <input type="radio" name="jenis_kelamin" value="Perempuan" <?= $pelanggan['jenis_kelamin'] == 'Perempuan' ? 'checked' : '' ?> required>
                            <span class="radio-label">Perempuan</span>
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn-update">Update</button>
                <a href="/pelanggan" class="btn-back">Kembali</a>
            </form>
        </div>
    </div>
</body>
</html>
