<!-- http://localhost/PHP%20Learning/003%20Creating%20Basic%20Website%20about%20me%20Using%20php/index.php -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About me Using Php</title>
    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Gaurav </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        Welcome to my website!
                    </span>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-5">
        <h1>About Me</h1>
        <p>Hello! My name is Gaurav. I am a web developer with a passion for creating dynamic and user-friendly websites. I have experience in PHP, HTML, CSS, and JavaScript. In my free time, I enjoy learning new technologies and improving my coding skills.</p>
        <p>Feel free to explore my website and learn more about me and my work!</p>
    </main>

    <section class="container mt-5">
        <div class="card" style="width: 18rem;">
            <img src="img.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            </div>
        </div>
    </section>


</body>

</html>