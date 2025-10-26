<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naav Maharashtra - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-orange: #ff6600;
            --primary-black: #000;
            --dark-gray: #1a1a1a;
            --light-gray: #333;
            --white: #fff;
            --text-color: #f0f0f0;
            --success: #28a745;
            --warning: #ffc107;
            --danger: #dc3545;
            --info: #17a2b8;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--primary-black);
            color: var(--text-color);
            line-height: 1.6;
        }

        .admin-container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background: var(--dark-gray);
            padding: 20px 0;
            border-right: 2px solid var(--primary-orange);
        }

        .sidebar-header {
            padding: 0 20px 20px;
            border-bottom: 1px solid #333;
            margin-bottom: 20px;
        }

        .sidebar-header h2 {
            color: var(--primary-orange);
            font-size: 1.5rem;
        }

        .sidebar-menu {
            list-style: none;
        }

        .sidebar-menu li {
            margin-bottom: 5px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: var(--text-color);
            text-decoration: none;
            transition: 0.3s;
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background: var(--primary-orange);
            color: var(--white);
        }

        .sidebar-menu i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
        }

        .header {
            background: var(--dark-gray);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-left: 4px solid var(--primary-orange);
        }

        .stats-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: var(--dark-gray);
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            border-bottom: 3px solid var(--primary-orange);
        }

        .stat-card i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: var(--primary-orange);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stat-label {
            color: #aaa;
            font-size: 0.9rem;
        }

        /* Tables */
        .content-section {
            background: var(--dark-gray);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            display: none;
        }

        .content-section.active {
            display: block;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #333;
        }

        .section-header h3 {
            color: var(--primary-orange);
            font-size: 1.5rem;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: var(--primary-black);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #333;
        }

        th {
            background: var(--light-gray);
            color: var(--primary-orange);
            font-weight: 600;
        }

        tr:hover {
            background: #2a2a2a;
        }

        .status-badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .status-pending {
            background: var(--warning);
            color: #000;
        }

        .status-active {
            background: var(--success);
            color: var(--white);
        }

        .status-completed {
            background: var(--success);
            color: var(--white);
        }

        .status-failed {
            background: var(--danger);
            color: var(--white);
        }

        .status-unread {
            background: var(--warning);
            color: #000;
        }

        .status-read {
            background: var(--info);
            color: var(--white);
        }

        .btn {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: 0.3s;
        }

        .btn-primary {
            background: var(--primary-orange);
            color: var(--white);
        }

        .btn-primary:hover {
            background: #ff8533;
        }

        .btn-danger {
            background: var(--danger);
            color: var(--white);
        }

        .btn-danger:hover {
            background: #e74c3c;
        }

        .action-buttons {
            display: flex;
            gap: 5px;
        }

        /* Login Section */
        .login-container {
            max-width: 400px;
            margin: 100px auto;
            background: var(--dark-gray);
            padding: 40px;
            border-radius: 10px;
            border-left: 4px solid var(--primary-orange);
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header h2 {
            color: var(--primary-orange);
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 12px 15px;
            background: #333;
            border: 1px solid #444;
            border-radius: 5px;
            color: var(--white);
            font-family: 'Poppins', sans-serif;
        }

        .form-group input:focus {
            border-color: var(--primary-orange);
            outline: none;
        }

        .login-btn {
            width: 100%;
            background: var(--primary-orange);
            color: var(--white);
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-btn:hover {
            background: #ff8533;
        }

        .logout-btn {
            background: var(--danger);
            color: var(--white);
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .admin-container {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
                height: auto;
            }
            
            .stats-cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php
    session_start();
    include_once 'config/database.php';

    // Check if user is logged in
    $isLoggedIn = false;
    if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
        $isLoggedIn = true;
    }

    // Handle login
    if (isset($_POST['action']) && $_POST['action'] === 'login') {
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        
        $database = new Database();
        $db = $database->getConnection();
        
        $query = "SELECT * FROM admin_users WHERE username = :username";
        $stmt = $db->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        
        if ($stmt->rowCount() == 1) {
            $admin = $stmt->fetch(PDO::FETCH_ASSOC);
            // For demo purposes, using simple password check
            // In production, use password_verify($password, $admin['password_hash'])
            if ($password === 'admin123') {
                $_SESSION['admin_logged_in'] = true;
                $_SESSION['admin_username'] = $admin['username'];
                $isLoggedIn = true;
            }
        }
    }

    // Handle logout
    if (isset($_GET['action']) && $_GET['action'] === 'logout') {
        session_destroy();
        header("Location: admin.php");
        exit;
    }

    if (!$isLoggedIn) {
    ?>
    <div class="login-container">
        <div class="login-header">
            <h2><i class="fas fa-dumbbell"></i> Admin Login</h2>
            <p>Naav Maharashtra Vyamshala</p>
        </div>
        <form method="POST">
            <input type="hidden" name="action" value="login">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
        <div style="text-align: center; margin-top: 20px; color: #aaa; font-size: 0.9rem;">
            <p>Demo Credentials:<br>Username: admin<br>Password: admin123</p>
        </div>
    </div>
    <?php } else { ?>
    <div class="admin-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <h2><i class="fas fa-dumbbell"></i> Admin Panel</h2>
                <p>Naav Maharashtra</p>
            </div>
            <ul class="sidebar-menu">
                <li><a href="#" class="active" data-tab="dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="#" data-tab="members"><i class="fas fa-users"></i> Members</a></li>
                <li><a href="#" data-tab="payments"><i class="fas fa-rupee-sign"></i> Payments</a></li>
                <li><a href="#" data-tab="messages"><i class="fas fa-envelope"></i> Contact Messages</a></li>
                <li><a href="admin.php?action=logout" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>Admin Dashboard</h1>
                <div>Welcome, <?php echo $_SESSION['admin_username']; ?>!</div>
            </div>

            <!-- Dashboard Stats -->
            <div class="stats-cards">
                <?php
                $database = new Database();
                $db = $database->getConnection();

                // Total Members
                $query = "SELECT COUNT(*) as total FROM members";
                $stmt = $db->prepare($query);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $totalMembers = $result['total'];

                // Active Members
                $query = "SELECT COUNT(*) as total FROM members WHERE status = 'active'";
                $stmt = $db->prepare($query);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $activeMembers = $result['total'];

                // Total Revenue
                $query = "SELECT SUM(amount) as total FROM payments WHERE payment_status = 'completed'";
                $stmt = $db->prepare($query);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $totalRevenue = isset($result['total']) ? $result['total'] : 0;

                // Unread Messages
                $query = "SELECT COUNT(*) as total FROM contact_messages WHERE status = 'unread'";
                $stmt = $db->prepare($query);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $unreadMessages = $result['total'];
                ?>
                <div class="stat-card">
                    <i class="fas fa-users"></i>
                    <div class="stat-number"><?php echo $totalMembers; ?></div>
                    <div class="stat-label">Total Members</div>
                </div>
                <div class="stat-card">
                    <i class="fas fa-user-check"></i>
                    <div class="stat-number"><?php echo $activeMembers; ?></div>
                    <div class="stat-label">Active Members</div>
                </div>
                <div class="stat-card">
                    <i class="fas fa-rupee-sign"></i>
                    <div class="stat-number">₹<?php echo number_format($totalRevenue); ?></div>
                    <div class="stat-label">Total Revenue</div>
                </div>
                <div class="stat-card">
                    <i class="fas fa-envelope"></i>
                    <div class="stat-number"><?php echo $unreadMessages; ?></div>
                    <div class="stat-label">Unread Messages</div>
                </div>
            </div>

            <!-- Members Section -->
            <div class="content-section active" id="dashboard">
                <div class="section-header">
                    <h3>Recent Activity</h3>
                </div>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Plan</th>
                                <th>Status</th>
                                <th>Registration Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM members ORDER BY registration_date DESC LIMIT 10";
                            $stmt = $db->prepare($query);
                            $stmt->execute();
                            
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                $statusClass = 'status-' . $row['status'];
                                echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['full_name']}</td>
                                    <td>{$row['email']}</td>
                                    <td>{$row['phone']}</td>
                                    <td>" . ucfirst($row['membership_plan']) . "</td>
                                    <td><span class='status-badge {$statusClass}'>" . ucfirst($row['status']) . "</span></td>
                                    <td>" . date('M j, Y', strtotime($row['registration_date'])) . "</td>
                                </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Members Section -->
            <div class="content-section" id="members">
                <div class="section-header">
                    <h3><i class="fas fa-users"></i> All Members</h3>
                </div>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Plan</th>
                                <th>Status</th>
                                <th>Registration Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM members ORDER BY registration_date DESC";
                            $stmt = $db->prepare($query);
                            $stmt->execute();
                            
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                $gender = $row['gender'] ? ucfirst($row['gender']) : 'N/A';
                                $age = $row['age'] ? $row['age'] : 'N/A';
                                $statusClass = 'status-' . $row['status'];
                                
                                echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['full_name']}</td>
                                    <td>{$row['email']}</td>
                                    <td>{$row['phone']}</td>
                                    <td>{$age}</td>
                                    <td>{$gender}</td>
                                    <td>" . ucfirst($row['membership_plan']) . "</td>
                                    <td><span class='status-badge {$statusClass}'>" . ucfirst($row['status']) . "</span></td>
                                    <td>" . date('M j, Y g:i A', strtotime($row['registration_date'])) . "</td>
                                    <td class='action-buttons'>
                                        <button class='btn btn-primary' onclick='viewMember({$row['id']})'>View</button>
                                        <button class='btn btn-danger' onclick='deleteMember({$row['id']})'>Delete</button>
                                    </td>
                                </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Payments Section -->
            <div class="content-section" id="payments">
                <div class="section-header">
                    <h3><i class="fas fa-rupee-sign"></i> Payment History</h3>
                </div>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Payment ID</th>
                                <th>Member ID</th>
                                <th>Amount</th>
                                <th>Method</th>
                                <th>Status</th>
                                <th>Payment Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT p.*, m.full_name FROM payments p 
                                     LEFT JOIN members m ON p.member_id = m.id 
                                     ORDER BY p.payment_date DESC";
                            $stmt = $db->prepare($query);
                            $stmt->execute();
                            
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                $statusClass = 'status-' . $row['payment_status'];
                                echo "<tr>
                                    <td>{$row['payment_id']}</td>
                                    <td>{$row['member_id']} ({$row['full_name']})</td>
                                    <td>₹{$row['amount']}</td>
                                    <td>" . ucfirst($row['payment_method']) . "</td>
                                    <td><span class='status-badge {$statusClass}'>" . ucfirst($row['payment_status']) . "</span></td>
                                    <td>" . date('M j, Y g:i A', strtotime($row['payment_date'])) . "</td>
                                </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Messages Section -->
            <div class="content-section" id="messages">
                <div class="section-header">
                    <h3><i class="fas fa-envelope"></i> Contact Messages</h3>
                </div>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Submission Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM contact_messages ORDER BY submission_date DESC";
                            $stmt = $db->prepare($query);
                            $stmt->execute();
                            
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                $message = strlen($row['message']) > 50 ? substr($row['message'], 0, 50) . '...' : $row['message'];
                                $phone = $row['phone'] ? $row['phone'] : 'N/A';
                                $statusClass = 'status-' . $row['status'];
                                
                                echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['email']}</td>
                                    <td>{$phone}</td>
                                    <td title='{$row['message']}'>{$message}</td>
                                    <td><span class='status-badge {$statusClass}'>" . ucfirst($row['status']) . "</span></td>
                                    <td>" . date('M j, Y g:i A', strtotime($row['submission_date'])) . "</td>
                                    <td class='action-buttons'>
                                        <button class='btn btn-primary' onclick='viewMessage({$row['id']})'>View</button>
                                        <button class='btn btn-danger' onclick='deleteMessage({$row['id']})'>Delete</button>
                                    </td>
                                </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Tab Navigation
        document.querySelectorAll('.sidebar-menu a').forEach(function(link) {
            link.addEventListener('click', function(e) {
                if (this.getAttribute('href') === '#') {
                    e.preventDefault();
                    
                    // Remove active class from all links
                    document.querySelectorAll('.sidebar-menu a').forEach(function(l) {
                        l.classList.remove('active');
                    });
                    // Add active class to clicked link
                    this.classList.add('active');
                    
                    // Hide all sections
                    document.querySelectorAll('.content-section').forEach(function(section) {
                        section.classList.remove('active');
                    });
                    
                    // Show selected section
                    var tab = this.getAttribute('data-tab');
                    document.getElementById(tab).classList.add('active');
                }
            });
        });

        // Demo functions for actions
        function viewMember(id) {
            alert('View Member ID: ' + id + '\nThis would show detailed member information.');
        }

        function deleteMember(id) {
            if (confirm('Are you sure you want to delete member ID: ' + id + '?')) {
                alert('Member ' + id + ' would be deleted (implementation needed).');
            }
        }

        function viewMessage(id) {
            alert('View Message ID: ' + id + '\nThis would show the full message.');
        }

        function deleteMessage(id) {
            if (confirm('Are you sure you want to delete message ID: ' + id + '?')) {
                alert('Message ' + id + ' would be deleted (implementation needed).');
            }
        }

        // Auto-refresh dashboard every 30 seconds
        setInterval(function() {
            if (document.getElementById('dashboard').classList.contains('active')) {
                location.reload();
            }
        }, 30000);
    </script>
    <?php } ?>
</body>
</html>