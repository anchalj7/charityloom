<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
   <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        function showPanel(panelId) {
            $(".content-panel").addClass("d-none"); // Hide all panels
            $("#" + panelId).removeClass("d-none"); // Show the selected panel
        }

        function logout() {
            // Clear the session storage or any stored user data
            sessionStorage.clear();
            // Redirect to login page
            window.location.href = "admin_login.php";
        }
    </script>
   