<?php
$students = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $subjects = explode(',', $_POST['subjects']);
    $grades = explode(',', $_POST['grades']);

    $total = array_sum($grades);
    $average = $total / count($grades);

    if ($average >= 90) {
        $category = 'A';
    } elseif ($average >= 80) {
        $category = 'B';
    } elseif ($average >= 70) {
        $category = 'C';
    } elseif ($average >= 60) {
        $category = 'D';
    } else {
        $category = 'E';
    }

    $students[] = [
        'name' => $name,
        'id' => $id,
        'subjects' => $subjects,
        'grades' => $grades,
        'total' => $total,
        'average' => $average,
        'category' => $category
    ];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade Manager</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fb;
            color: #212529;
            line-height: 1.6;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 15px;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 2rem;
        }

        .card-header {
            background-color: #4361ee;
            color: white;
            padding: 1.2rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .card-header h2 {
            margin: 0;
            font-weight: 600;
            font-size: 1.5rem;
        }

        .card-header i {
            margin-right: 10px;
        }

        .card-body {
            padding: 1.5rem;
        }

        .table-responsive {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1rem;
            color: #212529;
        }

        th,
        td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: rgba(67, 97, 238, 0.1);
            color: #4361ee;
            font-weight: 600;
            border-top: none;
        }

        tbody tr:hover {
            background-color: rgba(67, 97, 238, 0.05);
        }

        .badge {
            display: inline-block;
            padding: 0.35em 0.65em;
            font-size: 0.75em;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
        }

        .badge-A {
            background-color: #28a745;
        }

        .badge-B {
            background-color: #17a2b8;
        }

        .badge-C {
            background-color: #ffc107;
            color: #212529;
        }

        .badge-D {
            background-color: #fd7e14;
        }

        .badge-E {
            background-color: #dc3545;
        }

        .form-row {
            margin-bottom: 1rem;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.5rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #4361ee;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(67, 97, 238, 0.25);
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .btn {
            display: inline-block;
            font-weight: 500;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 8px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-primary {
            color: #fff;
            background-color: #4361ee;
            border-color: #4361ee;
        }

        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #3f37c9;
            border-color: #3f37c9;
        }

        .text-muted {
            color: #6c757d !important;
            font-size: 0.875rem;
        }

        .mt-3 {
            margin-top: 1rem;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        .text-center {
            text-align: center;
        }

        .empty-state {
            padding: 3rem 1rem;
            text-align: center;
            color: #6c757d;
        }

        .grid-2 {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        @media (min-width: 768px) {
            .grid-2 {
                grid-template-columns: 1fr 1fr;
            }
        }

        .form-tip {
            display: block;
            margin-top: 0.25rem;
            font-size: 0.875rem;
            color: #6c757d;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-3">Student Grade Manager</h1>

        <div class="grid-2">
            <div class="card">
                <div class="card-header">
                    <h2><i class="fas fa-user-plus"></i> Add New Student</h2>
                </div>
                <div class="card-body">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-row">
                            <label for="name">Student Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter student's full name" required>
                        </div>

                        <div class="form-row">
                            <label for="id">Student ID</label>
                            <input type="text" class="form-control" name="id" id="id" placeholder="Enter student ID number" required>
                        </div>

                        <div class="form-row">
                            <label for="subjects">Subjects</label>
                            <input type="text" class="form-control" name="subjects" id="subjects" placeholder="Math, Science, English, History" required>
                            <span class="form-tip">Separate multiple subjects with commas</span>
                        </div>

                        <div class="form-row">
                            <label for="grades">Grades</label>
                            <input type="text" class="form-control" name="grades" id="grades" placeholder="85, 92, 78, 88" required>
                            <span class="form-tip">Enter grades corresponding to subjects (comma separated)</span>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Save Student Record
                        </button>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2><i class="fas fa-list-alt"></i> Student Records</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <?php if (!empty($students)) : ?>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>ID</th>
                                        <th>Subjects</th>
                                        <th>Grades</th>
                                        <th>Total</th>
                                        <th>Average</th>
                                        <th>Grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($students as $student) : ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($student['name']); ?></td>
                                            <td><?php echo htmlspecialchars($student['id']); ?></td>
                                            <td><?php echo htmlspecialchars(implode(', ', $student['subjects'])); ?></td>
                                            <td><?php echo htmlspecialchars(implode(', ', $student['grades'])); ?></td>
                                            <td><?php echo htmlspecialchars($student['total']); ?></td>
                                            <td><?php echo number_format($student['average'], 1); ?></td>
                                            <td>
                                                <span class="badge badge-<?php echo $student['category']; ?>">
                                                    <?php echo htmlspecialchars($student['category']); ?>
                                                </span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        <?php else : ?>
                            <div class="empty-state">
                                <i class="fas fa-info-circle fa-3x mb-3"></i>
                                <h3>No Records Found</h3>
                                <p>Start by adding a new student record using the form.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
