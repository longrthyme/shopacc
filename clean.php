<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dọn dẹp Error Log</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .clean-log-box {
            width: 100%;
            max-width: 600px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="clean-log-box">
            <h2 class="text-center">Dọn Dẹp Error Log</h2>
            <form action="" method="post" class="text-center">
                <button type="submit" name="clean_logs" class="btn btn-danger">- Click Vào Đây -</button>
            </form>
            <div class="mt-4">
                <?php
                if (isset($_POST['clean_logs'])) {
                    $di = new RecursiveDirectoryIterator('../');
                    $size = 0;
                    foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
                        if (preg_match("/error_log/i", $filename)) {
                            $size += $file->getSize();
                            echo $filename . ' - ' . $file->getSize() / 1024 / 1024 . ' Mb (Đã xoá) <br/>';
                            unlink($filename);
                        }
                    }
                    echo '<br>' . $size / 1024 / 1024 . ' Mb đã xóa file error log';
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
