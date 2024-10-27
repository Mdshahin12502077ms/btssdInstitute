
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student List Print</title>
        <style>
            /* Default styling for the print page */
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
            }

            .print-container {
                display: block; /* Ensure this is visible when printing */
                width: 100%;
            }

            @media print {
                .no-print {
                    display: none; /* Hide elements with this class during print */
                }

                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-bottom: 20px;
                }

                th, td {
                    border: 1px solid #ddd;
                    padding: 8px;
                    text-align: left;
                }

                th {
                    background-color: #f2f2f2;
                    color: #333;
                }

                .header {
                    text-align: center;
                    margin-bottom: 20px;
                }

                .footer {
                    text-align: center;
                    margin-top: 20px;
                    font-size: 12px;
                    color: #666;
                }
            }
        </style>
    </head>
    <body>

    <div class="print-container">
        <div class="header">
            <h1>{{Auth::user()->branch->institute_name}}</h1>
            <h2>Student List</h2>
            <p>Date: {{ date('Y-m-d') }}</p>
        </div>

        <table>
            <thead>
                <tr>
                    <th>SI No</th>
                    <th>Photo</th>
                    <th>Student Id<br>Father Name<br>Student Name<br>Mother Name</th>
                    <th>Date Of Birth<br>Religion<br>Gender<br>NID/BR</th>
                    <th>Course<br>Session<br>Class Roll</th>
                    <th>Educational Qualification<br>Board/Passing-Year<br>Registration</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><img src="{{ asset($student->student_photo) }}" alt="Photo" style="width: 100px; height: auto;"></td>
                        <td>
                            {{ $student->st_id_number }}<br>
                            {{ $student->st_name }}<br>
                            {{ $student->f_name }}<br>
                            {{ $student->m_name }}
                        </td>
                        <td>
                            {{ $student->Date_of_birth }}<br>
                            {{ $student->religion }}<br>
                            {{ $student->gender }}<br>
                            {{ $student->id_number }}
                        </td>
                        <td>
                            {{ $student->course->course_name }}<br>
                            {{ $student->session->session_name }}<br>
                            {{ $student->class_roll }}
                        </td>
                        <td>
                            {{ $student->edu_qualification }}<br>
                            {{ $student->reg_board }}/{{ $student->passing_year }}<br>
                            {{ $student->reg_no }}
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="footer">
            <p>Printed by: {{ Auth::user()->name }}</p>
        </div>
    </div>

    <script>
        window.print();
    </script>

    </body>
    </html>


