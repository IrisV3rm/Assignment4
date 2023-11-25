<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <title>Image Hosting | Sign-In</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

    <style>
        body {
            background-color: #191b1c;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        header {
            width: 100%;
            position: fixed;
            top: 0;
            padding: 10px 20px;
            z-index: 1000;
        }

        header>.d-flex {
            position: static;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>
</head>

<body>
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <a href="/Main/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94"
                    role="img">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                        fill="currentColor"></path>
                </svg>
                <span class="fs-4">Image Hosting</span>
            </a>
            <nav class="d-inline-flex mt-3 mt-md-0 ms-md-auto">
                <button class="btn btn-md btn-primary btn-block" onclick="window.location.href='sign-in.php'">Home</button>&nbsp;&nbsp;
                <?php 
                    if (false) {
                        echo('<button class="btn btn-md btn-primary btn-block" onclick="window.location.href=\'sign-in.php\'">Sign in</button>');
                    } else {
                        echo('<button class="btn btn-md btn-info btn-block" style="color:white;" onclick="window.location.href=\'upload.php\'">Upload Creation</button>&nbsp;&nbsp;');
                        echo('<button class="btn btn-md btn-danger btn-block" onclick="window.location.href=\'sign-out.php\'">Sign Out</button>');
                    }
                ?>
            </nav>
        </div>
    </header>

    <main>
        <section class="py-5 text-center container"></section>
        <div class="album py-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                <?php
                    $files = scandir("uploads/");

                    foreach ($files as $file) {
                        // Exclude the current and parent directory entries
                        if ($file != "." && $file != "..") {
                            $fileLocation = "uploads/" . $file;

                            // Determine file type
                            $fileType = mime_content_type($fileLocation);
                            $isImage = strpos($fileType, 'image') === 0;
                            $isVideo = strpos($fileType, 'video') === 0;
                            $isAudio = strpos($fileType, 'audio') === 0;

                            // Set appropriate values for image, video, or audio
                            $insertFileLocation = $fileLocation;
                            $insertFileName = $file;

                            echo <<<DHTML
                            <div class="col">
                                <div class="card shadow-sm">
DHTML;
                                    
                            if ($isImage) {
                                echo <<<DHTML
                                        <img src="$insertFileLocation" class="img-fluid" alt="$insertFileName">
DHTML;
                            } elseif ($isVideo) {
                                echo <<<DHTML
                                        <video controls class="img-fluid">
                                            <source src="$insertFileLocation" type="$fileType">
                                            Your browser does not support the video tag.
                                        </video>
DHTML;
                            } elseif ($isAudio) {
                                echo <<<DHTML
                                <object data="$insertFileLocation" type="$fileType" class="img-fluid" alt="$insertFileName">
                                    <audio controls>
                                        <source src="$insertFileLocation" type="$fileType">
                                        Your browser does not support the audio tag.
                                    </audio>
                                </object>
DHTML;
                            }
                                    
                            echo <<<DHTML
                                    <div class="card-body">
                                        <p class="card-text">$insertFileName</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
DHTML;
                        }
                    }
                ?>
                </div>
            </div>
        </div>

    </main>
</body>

</html>