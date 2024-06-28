<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerita Bergambar Babad Desa Punggul 2024</title>
    <link rel="stylesheet" href="styles.css">
  	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: #444;
            padding: 10px 0;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            padding: 5px 10px;
        }
        nav a:hover {
            background-color: #555;
        }
        .content {
            padding: 0px;
            text-align: center;
        }
        .content h2 {
            margin-top: 0;
        }
        .episode {
            max-width: 800px;
            margin: 0 auto;
        }
        .episode img {
            width: 100%;
          	margin-top: -1px;
            margin-bottom: -4px;
        }
        .footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
      	#backToTopBtn {
          display: none;
          position: fixed;
          bottom: 15px;
          right: 30px;
          z-index: 99;
          border: none;
          outline: none;
          background-color: #853203;
          color: white;
          cursor: pointer;
          padding: 15px;
          border-radius: 50%;
          font-size: 14px;
		}

        #backToTopBtn:hover {
            background-color: #555;
        }

        #backToTopBtn i {
            font-size: 24px;
        }


    </style>
</head>
<body>
    <div class="content">
        <div class="episode">
          <?php 
                for ($i = 1; $i <= 23; $i++) {
                    echo '<img data-src="PANEL ' . $i . '.jpg" alt="Cergam Punggul ' . $i . '" class="lazy">';
                }
            ?> 
            <!-- Tambahkan lebih banyak halaman sesuai kebutuhan -->
        </div>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Cergam Punggul. Host by Kujaya Creative</p>
    </footer>
	<button onclick="topFunction()" id="backToTopBtn" title="Kembali ke Atas">
        <i class="fas fa-arrow-up">&nbsp;</i>
    </button>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));

            if ("IntersectionObserver" in window) {
                let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            let lazyImage = entry.target;
                            lazyImage.src = lazyImage.dataset.src;
                            lazyImage.classList.remove("lazy");
                            lazyImageObserver.unobserve(lazyImage);
                        }
                    });
                });

                lazyImages.forEach(function(lazyImage) {
                    lazyImageObserver.observe(lazyImage);
                });
            } else {
                // Fallback untuk browser yang tidak mendukung IntersectionObserver
                let lazyLoad = function() {
                    lazyImages.forEach(function(lazyImage) {
                        if (lazyImage.getBoundingClientRect().top < window.innerHeight && lazyImage.getBoundingClientRect().bottom > 0 && getComputedStyle(lazyImage).display !== "none") {
                            lazyImage.src = lazyImage.dataset.src;
                            lazyImage.classList.remove("lazy");
                        }
                    });
                    if (lazyImages.length === 0) {
                        document.removeEventListener("scroll", lazyLoad);
                        window.removeEventListener("resize", lazyLoad);
                        window.removeEventListener("orientationchange", lazyLoad);
                    }
                };

                document.addEventListener("scroll", lazyLoad);
                window.addEventListener("resize", lazyLoad);
                window.addEventListener("orientationchange", lazyLoad);
            }
        });
      
      // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("backToTopBtn").style.display = "block";
    } else {
        document.getElementById("backToTopBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document with smooth behavior
function topFunction() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}


    </script>
  <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/js/all.min.js" crossorigin="anonymous"></script>
</body>
</html>
