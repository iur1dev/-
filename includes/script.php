<script src="js/jquery-3.6.1.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

<script>
    $(document).ready(function() {
        $('#sair').click(function() {
            $(location).attr('href', 'includes/logout.php');
        })
    });
</script>

</body>

</html>