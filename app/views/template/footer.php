
</div class="mb-1"> <!-- End Container -->
<footer class="text-center mt-auto py-3 bg-light">
        <p>&copy; 2024 MVC App. All rights reserved.</p>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Enable form validation
        (function () {
            'use strict';
            var forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>

    <script>
  // Ambil semua elemen link
  const links = document.querySelectorAll('.nav-item a');
  // Ambil URL halaman saat ini
  const currentUrl = window.location.pathname;

  // Loop melalui setiap link
  links.forEach(link => {
    // Jika href link sama dengan URL saat ini
    if (link.getAttribute('href') === currentUrl) {
      // Tambahkan kelas active
      link.classList.add('active');
    }
  });
</script>


</body>
</html>

</body>
</html>
