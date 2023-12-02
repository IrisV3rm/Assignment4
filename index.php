<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <title>Image Hosting | Index</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            background-color: #191b1c;
            /* Set the background color for dark mode */
            color: #fff;
            /* Set the text color for dark mode */
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
            /* Adjust the values to your desired spacing */
            z-index: 1000;
            /* Ensure the header appears above other content */
        }


        header>.d-flex {
            position: static;
            /* Reset the position of the direct child elements */
        }
    </style>
</head>

<body>
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <a href="/_School/ImageBrowsing/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94"
                    role="img">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                        fill="currentColor"></path>
                </svg>
                <span class="fs-4">Image Hosting</span>
            </a>
            <nav class="d-inline-flex mt-3 mt-md-0 ms-md-auto">
                <button class="btn btn-md btn-success btn-block" style="color:white;" onclick="window.location.href='/_School/ImageBrowsing/upload.php'">Upload Creation</button>&nbsp;&nbsp;
            </nav>
        </div>
    </header>
    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Image Viewer<br> & <br>Storage</h1>
                    <p class="lead text-body-secondary">I had so much fun making this assignment please levae any
                        feedback!</p>
                    <p>
                        <a class="btn btn-primary my-2" onclick="window.location.href='viewer.php'">View Image
                            & Video Albums</a>
                    </p>
                </div>
            </div>
        </section>
    </main>


</body>

</html>