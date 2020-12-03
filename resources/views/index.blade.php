<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

    <title>Progress Bar</title>
  </head>
  <body>
    

    <div class="container text-center p-3">
      <h1>Progress Bar</h1>

      <h4>Progress</h4>
      <h5 class="progress-value">50%</h5>
      <div class="progress mt-3">
        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

      <button id="start" class="btn btn-success m-3">Start Progress</button>
      <button id="clear" class="btn btn-danger m-3">Clear Progress</button>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>
    -->



    <script>
      const progressbar = document.querySelector('.progress-bar');
      const progressbarValue = document.querySelector('.progress-value');
      const clearProgressBar = () => {
        progressbar.style.width = '0%';
        progressbar.setAttribute('aria-valuenow', '0');
        progressbarValue.innerHTML = '0%';
      }
      const runProgressBar = () => {
          var progress = 0;
            var innterval = setInterval(function() {
              if (progress == 99)
                clearInterval(innterval);
              progress++;
              progressbar.style.width = progress + '%';
              progressbar.setAttribute('aria-valuenow', progress);
              progressbarValue.innerHTML = progress+'%';
            }, 20);
      }

      clearProgressBar();

      const button = document.querySelector('#start');
      button.addEventListener('click', (e) => {
        e.preventDefault();
        runProgressBar();
      })

      const buttonClear = document.querySelector('#clear');
      buttonClear.addEventListener('click', (e) => {
        e.preventDefault();
        clearProgressBar();
      })

      

    </script>



  </body>
</html>