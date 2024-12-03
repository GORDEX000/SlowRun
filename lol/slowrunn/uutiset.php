<!DOCTYPE html>
<html lang="fi">

<head>
    <title>Slow Running</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.store.js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>

    <style>
        body {
            overflow-x: hidden; /* Prevent horizontal overflow */
        }

        /* Optional: Adjust the height of the carousel */
        .slider img {
            height: auto; /* Allow height to adjust based on width */
            max-height: 800px; /* Limit maximum height */
            width: 100%; /* Ensure it spans full width */
        }

        /* Additional mobile-specific styles */
        @media (max-width: 768px) {
            .contact-info {
                text-align: center; /* Center contact info for mobile */
                margin-top: 20px; /* Space above contact info */
            }

            .follow {
                margin-bottom: 10px; /* Add spacing between contact items */
            }

            h1 {
                font-size: 24px; /* Adjust font size for headings */
            }

            h2 {
                font-size: 20px; /* Adjust font size for subheadings */
            }

            .navbar {
                text-align: center; /* Center align navbar items */
            }
        }
    </style>
</head>

<body>

    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <h1 class="navbar-brand">SLOW RUN</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Näytä valikko">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                        <a class="nav-link" href="index.php">Koti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="uutiset.php">Uutiset</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="yhteys.php">Yhteys</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>




    

    <!------uutiset osio TÄHÄN------->
    <section id="news" class="my-5">
        <div class="container">
            <h2 class="text-center mb-4">Uutiset</h2>
            <div class="row">
                <!-- Include the PHP file to load news -->
                <?php include 'news.php'; ?>
            </div>
        </div>
    </section>




</body>

</html>
