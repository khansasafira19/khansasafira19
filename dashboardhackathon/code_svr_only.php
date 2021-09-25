<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./head.html" ?>
</head>

<body>
    <div id="app">
        <?php include "./menu.html" ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Source Code for Support Vector Regression with 3 Significant Variables</h3>
            </div>
            <div class="page-content">
                <section class="section content-area-wrapper">
                    <div id="content">

                    </div>
                    <!-- <embed type="text/html" src="source_codes/model_trials.html" width="100%" height="auto" min-height="600px"></embed> -->
                    <script>
                        $(document).ready(function() {

                            $('#content').load("source_codes/svr_only.html");

                        });
                    </script>
                </section>
            </div>

            <?php include "./footer.html" ?>
        </div>
    </div>
    <?php include "./scripts.html" ?>
</body>

</html>