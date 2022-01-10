<div class=" cn-footer container-fluid bg-black p-0">

<nav class="navbar  header-row bg-dark ">
    <div class="container fter pb-3 pt-3" style="border-bottom: 1px solid #7e7c7c;">
        <a class=" nav-item " href="#">
            <a href="" class=" item-footer text-decoration-none text-white">About</a>

        </a>

        <a class="nav-item ">
            <a href="" class=" item-footer text-decoration-none text-white">Jobs</a>
        </a>
        <a class="nav-item ">
            <a href="" class=" item-footer text-decoration-none text-white">Blog</a>
        </a>
        <a class="nav-item ">
            <a href="" class=" item-footer text-decoration-none text-white">Report abuse</a>
        </a>
        <a class="nav-item ">
            <a href="" class=" item-footer text-decoration-none text-white">Developers</a>
        </a>
        <a class="nav-item ">
            <a href="" class=" item-footer text-decoration-none text-white">Guidelines</a>
        </a>
        <a class="nav-item ">
            <a href="" class=" item-footer text-decoration-none text-white">Help</a>
        </a>
        <a class="nav-item ">
            <a href="" class=" item-footer text-decoration-none text-white">Help forum</a>
        </a>
        <a class="nav-item ">
            <a href="" class=" item-footer text-decoration-none text-white">English
                <i class="ti-angle-down p-0"></i>
            </a>

        </a>
    </div>
    <div class="container mt-2 pb-3 pt-2">

        <div class="nav-item it">
            <a href="" class="item-footer ms-3 text-secondary text-decoration-none">Privacy</a>


            <a href="" class="item-footer ms-3 text-secondary text-decoration-none"> Terms</a>
            <a href="" class="item-footer ms-3 text-secondary text-decoration-none">Cookies</a>
        </div>
        <div class="nav-item text-secondary">
            SmugMug+Flickr. Connecting people through photography.

        </div>
        <div class="nav-item">
            <i class="ti-facebook text-secondary ms-3" style="font-size: 20px;"></i>
            <i class="ti-twitter-alt text-secondary ms-3" style="font-size: 20px;"></i>
            <i class="ti-instagram text-secondary ms-3" style="font-size: 20px;"></i>

        </div>
    </div>
</nav>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $("#input_search").keyup(function() {
        var input = $(this).val();
        //alert(input);
        if (input != "") {
            $.ajax({
                url: "liveSearch.php",
                method: "POST",
                data: {
                    input: input
                },
                success: function(data) {
                    $("#SEARCH_RESULT").html(data);
                    $("#SEARCH_RESULT").css("display", "block");
                }
            });
        } else {
            $("#SEARCH_RESULT").css("display", "none");
        }
    });
});
</script>
<script src="assets/js/you.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>