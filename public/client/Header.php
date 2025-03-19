<!doctype html>
<html lang="vi">
<head>
<title><?=$title;?></title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="google-site-verification" content="IpLPDJZQV_zwKhck6kMq-igvupOmUReEa5KW7I0U6xI" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="<?=$NDVMEDIA->site('mota');?>" />
<meta name="keywords" content="<?=$NDVMEDIA->site('tukhoa');?>" />
<link rel="shortcut icon" href="<?=$NDVMEDIA->site('favicon');?>" type="image/x-icon">
<link rel="canonical" href="<?=BASE_URL('');?>" />
<meta content="" name="author" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?=BASE_URL('');?>" />
<meta property="og:title" content="<?=$NDVMEDIA->site('tenweb');?>" />
<meta property="og:image" content="<?=BASE_URL('');?><?=$NDVMEDIA->site('anhbia');?>" />
<link rel="stylesheet" href="/_nuxt/navaa.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link data-n-head="ssr" rel="preconnect" href="https://fonts.googleapis.com">
<link data-n-head="ssr" rel="preconnect" href="https://fonts.gstatic.com" crossorigin="true">
<link data-n-head="ssr" rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap">
<link data-n-head="ssr" rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Itim&display=swap">
<link rel="stylesheet" href="/assets/NDVMEDIA/assets/css/styles.css?=178">
    <link rel="stylesheet" href="/assets/NDVMEDIA/assets/css/main.css?=144">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
/* CSS cho máy tính */
@media screen and (min-width: 768px) {
    .swiper-desktop {
        display: block;
    }
    .swiper-mobile {
        display: none;
    }
}

/* CSS cho điện thoại di động */
@media screen and (max-width: 767px) {
    .swiper-desktop {
        display: none;
    }
    .swiper-mobile {
        display: block;
    }
}
</style>
    <!-- Script Header -->
        <style>
        /* Thêm đoạn CSS sau vào phần style của bạn */
        #searchButton {
            position: relative; /* Đảm bảo rằng nút tìm kiếm có vị trí tương đối */
            z-index: 1000; /* Đặt giá trị z-index cho nút tìm kiếm */
        }
        
        #navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1200; /* Đặt giá trị z-index cho thanh điều hướng */
            background-color: #fff; /* Màu nền của thanh điều hướng */
            border-bottom: 1px solid #ddd; /* Đường viền dưới của thanh điều hướng */
            padding: 10px;
        }
        
        #searchPopover {
            display: none;
            position: fixed;
            bottom: 60px; /* Đặt khoảng cách từ bottom sao cho nó nằm trên thanh điều hướng */
            left: 50%;
            transform: translateX(-50%);
            z-index: 1500; /* Đặt giá trị z-index cao hơn thanh điều hướng */
            width: 320px;
        }
        
        #searchPopover.visible {
            display: block;
        }




        @media only screen and (max-width: 600px) {
            /* Hiển thị thanh điều hướng trên các màn hình nhỏ hơn 600px (điện thoại di động) */
            .ws-sticky-navbar {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                z-index: 999;
                background-color: white;
                border-top: 1px solid #ddd; /* Thêm đường viền trên thanh điều hướng nếu cần */
                padding: 2px 1px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .ws-sticky-navbar a {
                text-decoration: none;
                color: #333; /* Màu chữ của các liên kết */
                padding: 10px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .ws-sticky-navbar i {
                font-size: 20px;
                margin-bottom: 5px;
            }

            .ws-sticky-navbar span {
                font-weight: bold;
                font-size: 12px;
            }
        }
        #dropdownContent {
            position: fixed;
            display: none;
            z-index: 2001;
            max-height: 100vh; /* Chiều cao tối đa là chiều cao của cửa sổ */
            overflow: hidden;
            white-space: nowrap; /* Ngăn chặn chữ xuống dòng */
        }
        .el-input--suffix .el-input__inner {
            padding-right: 30px;
        }
        .el-select .el-input__inner {
            cursor: pointer;
            padding-right: 35px;
        }
        .el-input--suffix .el-input__inner {
            padding-right: 30px;
        }
        .el-select .el-input__inner {
            cursor: pointer;
            padding-right: 35px;
        }
        .el-input__inner {
            -webkit-appearance: none;
            background-color: #fff;
            background-image: none;
            border-radius: 4px;
            border: 1px solid #dcdfe6;
            box-sizing: border-box;
            color: #606266;
            display: inline-block;
            font-size: inherit;
            height: 40px;
            line-height: 40px;
            outline: none;
            padding: 0 15px;
            transition: border-color .2s cubic-bezier(.645,.045,.355,1);
            width: 100%;
        }
        .custom-swal-container {
            z-index: 2012;
        }
        .tw-text-red-500 {
            --tw-text-opacity: 1;
            color: rgba(48,184,242,var(--tw-text-opacity));
        }
        .tw-font-bold {
            font-weight: 700;
        }
        .tw-py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }
        .tw-px-2 {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }
        .tw-bg-white {
            --tw-bg-opacity: 1;
            background-color: rgba(255,255,255,var(--tw-bg-opacity));
        }
        .tw-mb-4 {
            margin-bottom: 1rem;
        }
        .tw-relative {
            position: relative;
        }
        .tw-flex {
            display: flex;
        }
        .tw-h-10 {
            height: 2.5rem;
        }
        .tw-items-center {
            align-items: center;
        }
        .tw-justify-center {
            justify-content: center;
        }
        .tw-flex {
            display: flex;
        }
        .tw-justify-center {
            justify-content: center;
        }
        @media (min-width: 768px)
        .md\:tw-rounded {
            border-radius: 6rem;
        }
        .tw-text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }
        .tw-bg-white {
            --tw-bg-opacity: 1;
            background-color: rgba(255,255,255,var(--tw-bg-opacity));
        }
        .tw-justify-center {
            justify-content: center;
        }
        .tw-items-center {
            align-items: center;
        }
        .tw-w-10 {
            width: 2.5rem;
        }
        .tw-h-10 {
            height: 2.5rem;
        }
        .tw-flex {
            display: flex;
        }
        .tw-absolute {
            position: absolute;
        }
        .tw-flex {
            display: flex;
        }
        .tw-items-center {
            align-items: center;
        }
        .tw-flex {
            display: flex;
        }
        .tw-items-center {
            align-items: center;
        }
        .tw-w-full {
            width: 100%;
        }
        .tw-flex {
            display: flex;
        }.tw-w-full {
            width: 100%;
        }
    </style>
    
    <style type="text/css">


        .fade {
        display: none;
        }
    
        .fade.show {
            display: flex !important;
        }
    
        .open {
            display: block !important;
        }
    </style>
<style type="text/css">
@media screen and (min-width:768px){.swiper-desktop{display:block}.swiper-mobile{display:none}}@media screen and (max-width:767px){.swiper-desktop{display:none}.swiper-mobile{display:block}}.snowflake{position:absolute;width:10px;height:10px;background:linear-gradient(#fff,#fff);border-radius:50%;filter:drop-shadow(0 0 10px #fff)}.custom-buttons-container{position:fixed;bottom:20px;right:20px;display:flex;flex-direction:column;align-items:flex-end}.custom-buttons-container{display:flex;flex-direction:column;align-items:flex-end;position:fixed;right:20px}.custom-buttons-container a{margin-bottom:10px}@media only screen and (min-width:600px){.custom-buttons-container{bottom:20px}}@media only screen and (max-width:599px){.custom-buttons-container{bottom:57px}}.custom-button{display:flex;align-items:center;padding:10px;border-radius:5px;box-shadow:0 2px 4px rgba(0,0,0,.2);cursor:pointer;text-decoration:none;margin-bottom:10px;color:#fff;font-size:14px;font-weight:700;text-align:center;transition:background-color 0.3s}.buy-button{background-color:#d872da}.support-button{background-color:#1B8FD2}.custom-button img{width:30px;height:30px;margin-right:5px}#searchButton{position:relative;z-index:1000}#navbar{position:fixed;top:0;left:0;right:0;z-index:1200;background-color:#fff;border-bottom:1px solid #ddd;padding:10px}#searchPopover{display:none;position:fixed;bottom:60px;left:50%;transform:translateX(-50%);z-index:1500;width:320px}#searchPopover.visible{display:block}@media only screen and (max-width:600px){.ws-sticky-navbar{position:fixed;bottom:0;left:0;right:0;z-index:999;background-color:#fff;border-top:1px solid #ddd;padding:2px 1px;display:flex;justify-content:space-between;align-items:center}.ws-sticky-navbar a{text-decoration:none;color:#333;padding:10px;display:flex;flex-direction:column;align-items:center}.ws-sticky-navbar i{font-size:20px;margin-bottom:5px}.ws-sticky-navbar span{font-weight:700;font-size:12px}}#dropdownContent{position:fixed;display:none;z-index:2001;max-height:100vh;overflow:hidden;white-space:nowrap}.el-input--suffix .el-input__inner{padding-right:30px}.el-select .el-input__inner{cursor:pointer;padding-right:35px}.el-input--suffix .el-input__inner{padding-right:30px}.el-select .el-input__inner{cursor:pointer;padding-right:35px}.el-input__inner{-webkit-appearance:none;background-color:#fff;background-image:none;border-radius:4px;border:1px solid #dcdfe6;box-sizing:border-box;color:#606266;display:inline-block;font-size:inherit;height:40px;line-height:40px;outline:none;padding:0 15px;transition:border-color .2s cubic-bezier(.645,.045,.355,1);width:100%}.custom-swal-container{z-index:2012}.tw-text-red-500{--tw-text-opacity:1;color:rgba(48,184,242,var(--tw-text-opacity))}.tw-font-bold{font-weight:700}.tw-py-2{padding-top:.5rem;padding-bottom:.5rem}.tw-px-2{padding-left:.5rem;padding-right:.5rem}.tw-bg-white{--tw-bg-opacity:1;background-color:rgba(255,255,255,var(--tw-bg-opacity))}.tw-mb-4{margin-bottom:1rem}.tw-relative{position:relative}.tw-flex{display:flex}.tw-h-10{height:2.5rem}.tw-items-center{align-items:center}.tw-justify-center{justify-content:center}.tw-flex{display:flex}.tw-justify-center{justify-content:center}@media (min-width:768px) .md\:tw-rounded{border-radius:6rem}.tw-text-xl{font-size:1.25rem;line-height:1.75rem}.tw-bg-white{--tw-bg-opacity:1;background-color:rgba(255,255,255,var(--tw-bg-opacity))}.tw-justify-center{justify-content:center}.tw-items-center{align-items:center}.tw-w-10{width:2.5rem}.tw-h-10{height:2.5rem}.tw-flex{display:flex}.tw-absolute{position:absolute}.tw-flex{display:flex}.tw-items-center{align-items:center}.tw-flex{display:flex}.tw-items-center{align-items:center}.tw-w-full{width:100%}.tw-flex{display:flex}.tw-w-full{width:100%}.fade{display:none}.fade.show{display:flex!important}.open{display:block!important}.el-input__inner2{--el-input-inner-height:calc(var(--el-input-height, 40px) + 2px)}.ws-auth .el-input__inner2{color:#000}.el-input--large .el-input__inner2{--el-input-inner-height:calc(var(--el-input-height, 40px) - 2px)}.el-input__inner2{--el-input-inner-height:calc(var(--el-input-height, 32px) - 2px);-webkit-appearance:none;background:none;border:none;box-sizing:border-box;color:var(--el-input-text-color,var(--el-text-color-regular));flex-grow:1;font-size:inherit;height:30px;height:var(--el-input-inner-height);line-height:30px;line-height:var(--el-input-inner-height);outline:none;padding:0;width:100%}
</style>
<body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</script>
<script>

        console.log("in send messsage");
        const userId  = <?php echo json_encode($_SESSION['user_id']); ?>;
        const adminId = 16; // Admin ID
        console.log("Admin User ID:", userId);

        const isAdmin = userId == 16; // Check if the current user is admin


        // Pusher Setup
        const pusher = new Pusher('8b7ecf7e2ed0f17f5c8d', { cluster: 'ap1' });
        /* const channel = pusher.subscribe('chat_channel_' + userId);


        channel.bind('new_message', function(data) {
            console.log("get new messsage", data);
            $("#messages").append(`<p><strong>${data.sender_id}:</strong> ${data.message}</p>`);
        }); */

        if (isAdmin) {
    // Admin subscribes to ALL user channels
    console.log("Admin is listening to all chat channels.");
    
    // Example: Admin listens to chat_channel_17 (Replace with dynamic logic if needed)
    const userChannels = [17,16]; // Fetch from server or database dynamically
    userChannels.forEach(id => {
        const channel = pusher.subscribe('chat_channel_' + id);
        console.log("Admin subscribed to:", 'chat_channel_' + id);
        
        channel.bind('new_message', function(data) {
            console.log("📩 Admin received a new message:", data);
            $("#messages").append(`<p><strong>${data.sender_id}:</strong> ${data.message}</p>`);
        });
    });
} else {
    // Normal user subscribes to their own channel
    const channel = pusher.subscribe('chat_channel_' + userId);
    console.log("User subscribed to:", 'chat_channel_' + userId);

    channel.bind('new_message', function(data) {
        console.log("📩 User received a new message:", data);
        $("#messages").append(`<p><strong>${data.sender_id}:</strong> ${data.message}</p>`);
    });
}

        function sendMessage() {
            let message = $("#message").val();
            let file = $("#file-upload")[0].files[0];
            let formData = new FormData();
            formData.append("message", message);
            formData.append("receiver_id", adminId);
            formData.append("file_url", file ? file.name : "");

            $.ajax({
                url: "chat",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log("Message sent!");
                }
            });
        }
    </script>