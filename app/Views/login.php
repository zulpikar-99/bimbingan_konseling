<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Guru BK</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;

            background-image:
                linear-gradient(
                    rgba(15, 23, 42, 0.45),
                    rgba(15, 23, 42, 0.45)
                ),
                url("<?= base_url('mansion.jpg') ?>");

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            width: 400px;
            padding: 35px;

            background: rgba(255, 255, 255, 0.18);

            border: 1px solid rgba(255, 255, 255, 0.35);

            border-radius: 18px;

            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);

            box-shadow:
                0 8px 32px rgba(0, 0, 0, 0.25);

            color: white;
        }

        .login-box h2 {
            text-align: center;
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 28px;
        }

        .login-subtitle {
            text-align: center;
            margin-bottom: 30px;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.85);
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-size: 14px;
            font-weight: 600;
        }

        input {
            width: 100%;
            padding: 12px 14px;
            margin-bottom: 18px;

            border: 1px solid rgba(255, 255, 255, 0.45);
            border-radius: 8px;

            background: rgba(255, 255, 255, 0.85);

            color: #1e293b;
            font-size: 14px;

            outline: none;
        }

        input:focus {
            border-color: white;
            background: white;
        }

        input::placeholder {
            color: #64748b;
        }

        button {
            width: 100%;
            padding: 12px;

            border: none;
            border-radius: 8px;

            background: #2563eb;
            color: white;

            font-size: 15px;
            font-weight: bold;

            cursor: pointer;

            transition: 0.2s;
        }

        button:hover {
            background: #1d4ed8;
            transform: translateY(-1px);
        }

        .error {
            background: rgba(220, 38, 38, 0.85);
            color: white;

            padding: 10px 12px;
            margin-bottom: 18px;

            border-radius: 8px;

            font-size: 14px;
        }

        .login-footer {
            text-align: center;
            margin-top: 25px;

            font-size: 12px;
            color: rgba(255, 255, 255, 0.75);
        }

        @media (max-width: 480px) {
            .login-box {
                width: calc(100% - 30px);
                padding: 28px 22px;
            }
        }
    </style>
</head>

<body>

    <div class="login-box">

        <h2>BK SEKOLAH</h2>

        <div class="login-subtitle">
            Sistem Informasi Bimbingan Konseling
        </div>

        <?php if (session()->getFlashdata('error')) : ?>

            <div class="error">
                <?= esc(session()->getFlashdata('error')) ?>
            </div>

        <?php endif; ?>

        <form action="<?= base_url('login/proses') ?>" method="post">

            <?= csrf_field() ?>

            <label for="username">
                Username
            </label>

            <input
                type="text"
                id="username"
                name="username"
                placeholder="Masukkan username"
                required
            >

            <label for="password">
                Password
            </label>

            <input
                type="password"
                id="password"
                name="password"
                placeholder="Masukkan password"
                required
            >

            <button type="submit">
                Login
            </button>

        </form>

        <div class="login-footer">
            Sistem Informasi Bimbingan Konseling
        </div>

    </div>

</body>
</html>