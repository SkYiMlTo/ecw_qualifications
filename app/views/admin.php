<?php
session_start();
?>

<?php include "../controllers/authorized_account.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honey Store - Admin dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

<!-- Navbar -->
<?php include "navbar.php" ?>

<?php
if (isset ($_SESSION['__userSession']['accType']) && $_SESSION['__userSession']['accType'] !== "ADMIN_HONEY_ACC_0"){
    echo'
<!-- Main Container -->
<div class="container-fluid mt-4 mb-5">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            <div class="card">
                <!-- Sidebar -->
                <aside id="admin-sidebar" class="bg-light p-4 ">
                    <h4 class="mb-4">Admin Dashboard</h4>

                    <!-- Dashboard Stats Section -->
                    <div id="dashboard-stats-section" class="mb-4">
                        <div class="list-group">
                            <!-- Total Users -->
                            <a class="list-group-item list-group-item-action" style="background-color: #D0D0D0;">
                                <h5 class="mb-1">Total Users</h5>
                                <p class="mb-1">1,234</p>
                            </a>
                            <!-- Website Uptime -->
                            <a class="list-group-item list-group-item-action" style="background-color: #D8D8D8;">
                                <h5 class="mb-1">Website Uptime</h5>
                                <p class="mb-1">99.98%</p>
                            </a>
                            <!-- Security Alerts -->
                            <a class="list-group-item list-group-item-action" style="background-color: #E0E0E0;">
                                <h5 class="mb-1">Security Alerts</h5>
                                <p class="mb-1">3 Active</p>
                            </a>
                            <!-- Server Load -->
                            <a class="list-group-item list-group-item-action" style="background-color: #F0F0F0;">
                                <h5 class="mb-1">Server Load</h5>
                                <p class="mb-1">65%</p>
                            </a>
                        </div>
                    </div>
                </aside>

            </div>
        </div>

        <!-- Content Area -->
        <div class="col-md-9">
            <!-- Dashboard Stats Section -->
            <section id="dashboard-stats-section" class="mb-4">
                <div class="card">
                    <div class="card-header">
                        Tickets Stats
                    </div>
                    <div class="card-body">
                        <div id="dashboard-stats" class="row text-center">
                            <div class="col-md-4 mb-3">
                                <div class="card bg-warning">
                                    <div class="card-body">
                                        <h5 class="card-title">Active Tickets</h5>
                                        <p class="card-text">45</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card bg-success">
                                    <div class="card-body">
                                        <h5 class="card-title">Resolved Tickets</h5>
                                        <p class="card-text">102</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card bg-danger">
                                    <div class="card-body">
                                        <h5 class="card-title">Closed Tickets</h5>
                                        <p class="card-text">34</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Manage Tickets -->
            <section id="tickets" class="mb-4">
                <div class="card">
                    <div class="card-header">
                        Manage Tickets
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Ticket ID</th>
                                <th>User</th>
                                <th>Subject</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>#001</td>
                                <td>User1</td>
                                <td>Login Issue</td>
                                <td><span class="badge bg-warning text-dark">Pending</span></td>
                                <td><a href="#collapseOne" class="btn btn-sm btn-primary" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">View</a></td>
                            </tr>
                            <tr>
                                <td>#002</td>
                                <td>User2</td>
                                <td>Order not received</td>
                                <td><span class="badge bg-success">Resolved</span></td>
                                <td><a href="#collapseTwo" class="btn btn-sm btn-primary" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">View</a></td>
                            </tr>
                            <tr>
                                <td>#003</td>
                                <td>User3</td>
                                <td>Payment Issue</td>
                                <td><span class="badge bg-danger">Closed</span></td>
                                <td><a href="#collapseThree" class="btn btn-sm btn-primary" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">View</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
';
    if (isset ($_SESSION['__userSession']['username']) && $_SESSION['__userSession']['username'] == "admin-lilewis") {
        echo'
            <!-- Conversations -->
            <section id="conversations" class="mb-4">
                <div class="card">
                    <div class="card-header">
                        Conversations
                    </div>
                    <div class="card-body">
                        <div class="accordion" id="conversationAccordion">
                            <!-- Conversation 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Conversation with Janie Steel (Ticket #072)
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#conversationAccordion">
                                    <div class="accordion-body">
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="User" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Janie Steel <small class="text-muted">Yesterday at 10:13 AM</small></h6>
                                                <p>I’m unable to access my cart. Can you help?</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="Admin" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>'.$_SESSION['__userSession']['username'].' <small class="text-muted">Today at 9:12 AM</small></h6>
                                                <p>Sure, this section is under rework for now, everything will be good in 2 days.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="User" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Janie Steel <small class="text-muted">Today at 10:34 AM</small></h6>
                                                <p>Thank you! I\'ll checkout later then.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Conversation 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Conversation with admin-fred (Ticket #992)
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#conversationAccordion">
                                    <div class="accordion-body">
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="User" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>admin-fred <small class="text-muted">2 days ago at 3:32 PM</small></h6>
                                                <p>Since there was a huge update a few days ago we had to refactor the database.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="Admin" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>'.$_SESSION['__userSession']['username'].' <small class="text-muted">Yesterday at 1:05 PM</small></h6>
                                                <p>I saw that, it\'s kinda outrageous we had to manually backup everything...</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="User" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>admin-fred <small class="text-muted">Today at 8:14 AM</small></h6>
                                                <p>I feel you, anyway <a href="./youknow.jpg" download>here</a> is the new version of the DB. Can you take a look and tell me everything is fine ?</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="Admin" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>'.$_SESSION['__userSession']['username'].' <small class="text-muted">Today at 9:43 AM</small></h6>
                                                <p>There is quite a lot of new users. Seems great, good work!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Conversation 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Conversation with Planet Annihilator (Ticket #033)
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#conversationAccordion">
                                    <div class="accordion-body">
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="Admin" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>'.$_SESSION['__userSession']['username'].' <small class="text-muted">3 days ago at 11:00 AM</small></h6>
                                                <p>Dear customer, just to let you know that kind of nickname is prohibited on our website. Please update it to use a proper username.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="User" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Planet Annihilator <small class="text-muted">2 days ago at 11:33 AM</small></h6>
                                                <p>Sorry, I like to be anonymous on internet, I will fix that.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="Admin" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>'.$_SESSION['__userSession']['username'].' <small class="text-muted">2 days ago at 13:34 PM</small></h6>
                                                <p>Great, have a nice day.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="User" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Planet Annihilator <small class="text-muted">2 days ago at 13:47 PM</small></h6>
                                                <p>Thank you, you too.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>';
    }

if (isset ($_SESSION['__userSession']['username']) && $_SESSION['__userSession']['username'] == "admin-jidavis") {
    echo '
            <!-- Conversations -->
            <section id="conversations" class="mb-4">
                <div class="card">
                    <div class="card-header">
                        Conversations
                    </div>
                    <div class="card-body">
                        <div class="accordion" id="conversationAccordion">
                            <!-- Conversation 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Conversation with Franck Vinaigrette (Ticket #091)
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#conversationAccordion">
                                    <div class="accordion-body">
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="User" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Franck Vinaigrette <small class="text-muted">Today at 8:20 AM</small></h6>
                                                <p>I’m unable to log in to my account. Can you help?</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="Admin" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>'.$_SESSION['__userSession']['username'].' <small class="text-muted">Today at 8:52 AM</small></h6>
                                                <p>Sure, try to clear cache from your browser and let me know if the issue persists.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="User" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Franck Vinaigrette <small class="text-muted">Just now</small></h6>
                                                <p>Thank you! I was able to log in after resetting my password.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Conversation 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Conversation with John Hammond (Ticket #402)
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#conversationAccordion">
                                    <div class="accordion-body">
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="User" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>John Hammond <small class="text-muted">2 days ago at 3:00 PM</small></h6>
                                                <p>I haven’t received my order yet. What should I do?</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="Admin" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>'.$_SESSION['__userSession']['username'].' <small class="text-muted">Yesterday at 1:00 PM</small></h6>
                                                <p>I apologize for the delay. We’re checking with the delivery service and will get back to you shortly.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="User" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>John Hammond <small class="text-muted">Today at 10:00 AM</small></h6>
                                                <p>Thank you! I just received it.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Conversation 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Conversation with jasmith (Ticket #003)
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#conversationAccordion">
                                    <div class="accordion-body">
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="User" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>jasmith <small class="text-muted">3 days ago at 11:30 AM</small></h6>
                                                <p>I’m having an issue connecting to my profile. I forgot my pin, can you help me with that?</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="Admin" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>'.$_SESSION['__userSession']['username'].' <small class="text-muted">3 days ago at 11:54 AM</small></h6>
                                                <p>We’re sorry to hear that. I just resetted your pin, your new pin is 35268713, change it as soon as possible.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="User" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>jasmith <small class="text-muted">3 days ago at 12:40 AM</small></h6>
                                                <p>Thank you for the assistance.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>';
}

echo'
<div class="mt-4">';
    }
else{
    echo '
<div class="mx-auto mt-5">
    <details id="contenu_details">
        <summary onclick="myFunction_contenu()" id="toto">Admin informations</summary>
        <video id="contenu_video" width="640" height="360" controls autoplay muted>
            <source src="youknow.mp4" type="video/mp4">
        </video>
    </details>
</div>
<script>
    const video_contenu = document.getElementById("contenu_video");

    function myFunction_contenu(){
        var delayInMilliseconds = 10; //1 second
        setTimeout(function () {
                video_contenu.muted = !video_contenu.muted;
        }, delayInMilliseconds);
    }
</script>
';
}
?>
<?php include "footer.php" ?>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
