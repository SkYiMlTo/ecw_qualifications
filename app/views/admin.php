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
                                        Conversation with User1 (Ticket #001)
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#conversationAccordion">
                                    <div class="accordion-body">
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="User" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>User1 <small class="text-muted">Yesterday at 10:00 AM</small></h6>
                                                <p>I’m unable to log in to my account. Can you help?</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="Admin" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Admin <small class="text-muted">Today at 9:00 AM</small></h6>
                                                <p>Sure, please try resetting your password and let me know if the issue persists.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="User" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>User1 <small class="text-muted">Just now</small></h6>
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
                                        Conversation with User2 (Ticket #002)
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#conversationAccordion">
                                    <div class="accordion-body">
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="User" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>User2 <small class="text-muted">2 days ago at 3:00 PM</small></h6>
                                                <p>I haven’t received my order yet. What should I do?</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="Admin" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Admin <small class="text-muted">Yesterday at 1:00 PM</small></h6>
                                                <p>I apologize for the delay. We’re checking with the delivery service and will get back to you shortly.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="User" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>User2 <small class="text-muted">Today at 10:00 AM</small></h6>
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
                                        Conversation with User3 (Ticket #003)
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#conversationAccordion">
                                    <div class="accordion-body">
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="User" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>User3 <small class="text-muted">3 days ago at 11:30 AM</small></h6>
                                                <p>I’m having an issue with payment processing. It keeps failing.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="Admin" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Admin <small class="text-muted">2 days ago at 2:00 PM</small></h6>
                                                <p>We’re sorry to hear that. Could you try using a different payment method or ensure that your card details are correct?</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="https://via.placeholder.com/40" alt="User" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>User3 <small class="text-muted">Yesterday at 4:30 PM</small></h6>
                                                <p>It worked! Thank you for the assistance.</p>
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
</div>

<div class="mt-4">';
    }
else{
    echo '
    <img src="youknow.jpg" />
';
}
?>
<?php include "footer.php" ?>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
