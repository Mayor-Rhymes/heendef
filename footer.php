<?php include "admin/includes/config.php"; ?>
<footer class="main-footer">

    <div class="footer-top">

    </div>


    <div class="footer-main">
        <div class="container">

            <div class="row">
                <div class="col-md-4">

                    <div class="footer-col">

                        <h4 class="footer-title">About us <span class="title-under"></span></h4>

                        <div class="footer-content">

                            <p>
                                <strong>HEENDEF</strong> Health, Environment and Development Foundation (HEENDEF) is
                                a dynamic non-profit
                                organization that was established on March 7, 2005, with the primary aim of
                                promoting and advancing
                                the well-being of communities through sustainable initiatives in health,
                                environment, and development.
                            </p>

                            <p>
                                HEENDEF is registered under the Corporate Affairs Commission with Registration
                                Number: CAC/IT/NO 18195.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="footer-col">

                        <h4 class="footer-title">Events <span class="title-under"></span></h4>

                        <div class="footer-content">
                            <ul class="tweets list-unstyled">
                                <?php
                                if (isset($conn)) {

                                    $result = $conn->query("SELECT * FROM EVENTS ORDER BY id DESC LIMIT 3");
                                    $current_date = date("Y-m-d");
                                    if ($result->num_rows > 0) {

                                        while ($row = $result->fetch_assoc()) {
                                            echo "<li class='tweet'>" . $row["title"].  "<span style='margin-left: 20px'>". substr($row["evtDate"], 0, 4). "</span>". "</li>";
                                        }
                                    }
                                }



                                ?>
                            </ul>
                        </div>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="footer-col">

                        <h4 class="footer-title">Contact us <span class="title-under"></span></h4>

                        <div class="footer-content">

                            <div class="footer-form">

                                <form action="php/mail.php" class="ajax-form">

                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="E-mail"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <textarea name="message" class="form-control" placeholder="Message"
                                            required></textarea>
                                    </div>

                                    <div class="form-group alerts">

                                        <div class="alert alert-success" role="alert">

                                        </div>

                                        <div class="alert alert-danger" role="alert">

                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-submit pull-right">Send
                                            message</button>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="clearfix"></div>



            </div>


        </div>


    </div>

    <div class="footer-bottom">

        <div class="footer-bottom">

            <div class="container text-right">
                HEENDEF@ copyrights 2023
            </div>
        </div>
    </div>

</footer>