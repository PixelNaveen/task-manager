<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Manager Dashboard</title>
    <!-- Bootstrap 5.3.6 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN (for icons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="sidebar.css" rel="stylesheet">
    <link href="bottomnav.css" rel="stylesheet">
    <link href="new-task-form.css" rel="stylesheet">

    <!-- Dashboard Widgets CSS -->
    <link href="dashboard-widgets.css" rel="stylesheet">
    <!-- Chart.js CDN for productivity chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.3/dist/chart.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

</head>

<body>
    <div class="d-flex flex-column flex-lg-row min-vh-100">
        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->
        <main class="flex-grow-1 p-3 bg-light">
            <!-- Header Navigation -->
            <?php include 'headernav.php'; ?>
            <!-- Dashboard Widgets (NEW) -->
            <?php include 'dashboard-widgets.php'; ?>
        </main>
    </div>
    <!-- Bottom nav for mobile -->
    <?php include 'bottomnav.php'; ?>
    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>
    <script src="theme.js"></script>
    <!-- Dashboard Widgets JS -->
    <script type="module" src="dashboard-widgets.js"></script>
    <?php include 'new-task-form.php'; ?>
    <script type="module" src="firebase.js"></script>
    <script type="module" src="add-task.js"></script>
    <script type="module" src="logout.js"></script>
    <script type="module" src="auth.js"></script>
    <script type="module" src="notification.js"></script>
    <script type="module" src="task-summary.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Display the toast message when the data insert or delete operation is successful -->

    <!-- Toast Container -->
    <!-- toast.php -->
    <?php include 'toast.php'; ?>



</body>

</html>