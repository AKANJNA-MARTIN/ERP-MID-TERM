<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
    <title>HRM + CRM Prototype</title>
</head>
   <link rel="stylesheet" href="style.css">
<body>
    <h1>My ERP Prototype</h1>     
  <header>
        <h1>HRM + CRM Management System</h1>
        <p>Human Resources and Customer Relationship Management</p>
    </header>

    <nav>
        <a href="#dashboard">Dashboard</a>
        <a href="#employees">Employees</a>
        <a href="#customers">Customers</a>
        <a href="#assignments">Assignments</a>
    </nav>

    <main>

        <!-- Dashboard -->
        <section id="dashboard">
            <h2>Dashboard</h2>

            <div class="dashboard">
                <div class="card">
                    <h3>Employees</h3>
                    <p>25</p>
                </div>

                <div class="card">
                    <h3>Customers</h3>
                    <p>120</p>
                </div>

                <div class="card">
                    <h3>Departments</h3>
                    <p>5</p>
                </div>
            </div>
        </section>

        <!-- HRM Module -->
        <section id="employees">
            <h2>Human Resource Management (HRM)</h2>

            <table>
                <tr>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Job Title</th>
                </tr>

                <tr>
                    <td>EMP001</td>
                    <td>Anamani cosintatin</td>
                    <td>Sales</td>
                    <td>Sales Manager</td>
                </tr>

                <tr>
                    <td>EMP002</td>
                    <td>Akanyinjuka julius</td>
                    <td>Human Resources</td>
                    <td>HR Officer</td>
                </tr>

                <tr>
                    <td>EMP003</td>
                    <td>Grace Ninsiima</td>
                    <td>Marketing</td>
                    <td>Marketing Officer</td>
                </tr>
            </table>
        </section>

        <!-- CRM Module -->
        <section id="customers">
            <h2>Customer Relationship Management (CRM)</h2>

            <table>
                <tr>
                    <th>Customer ID</th>
                    <th>Customer Name</th>
                    <th>Company</th>
                    <th>Status</th>
                    <th>Assigned employee</th><!--NEW - this is the intrgration-->
                </tr>

                <tr>
                    <td>CUS001</td>
                    <td>marvin Trading</td>
                    <td>marvin Enterprises</td>
                    <td>Active</td>
                    <td>EMP001 - Sarah namusoke</td>
                </tr>

                <tr>
                    <td>CUS002</td>
                    <td>Mary Supplies</td>
                    <td>Mary Limited</td>
                    <td>Prospect</td>
                    <td>EMP002 - Akanyinjuka julius</td> <!--add this line-->
                </tr>

                <tr>
                    <td>CUS003</td>
                    <td>Peter Services</td>
                    <td>Peter Company</td>
                    <td>Active</td>
                    <td>EMP001 - Sarah namusoke</td> <!--add this table>
                </tr>
            </table>
        </section>

        <!-- Integrated Module -->
        <section id="assignments">
            <h2>Employee-Customer Assignments</h2>
        
            <table>
                <tr>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Customer ID</th>
                    <th>Customer Name</th>
                </tr>

                <tr>
                    <td>EMP001</td>
                    <td>Sarah Namusoke</td>
                    <td>CUS001</td>
                    <td>marvin Trading</td>
                </tr>

                <tr>
                    <td>EMP002</td>
                    <td>Ainamani cosintatin</td>
                    <td>CUS002</td>
                    <td>Mary Supplies</td>
                </tr>
            </table>

            <p>
                Employees from HRM are linked to customers in CRM
                using their employee IDs and customer IDs.
                This demonstrates integration between the two modules.
            </p>
        </section>

    </main>

    <footer>
        <p>HRM + CRM Integrated System 2026</p>
    </footer>
 </body>
</html>