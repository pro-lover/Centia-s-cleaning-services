
    function startLoader() {
        const loader = document.querySelector(".loader_conatiner");
      
        setTimeout(function() {
            loader.style.display = 'block';
        }, 1000);
      
        window.addEventListener("DOMContentLoaded", function(event) {
          setTimeout(function() {
            loader.style.display = 'none';

          }, 4000);
        });
      }
      
      startLoader();
      