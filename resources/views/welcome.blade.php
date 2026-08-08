<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hello Laravel</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background: #f4f4f5;
            color: #1f2937;
        }

        .container {
            width: 90%;
            max-width: 700px;
            background: white;
            padding: 45px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 10px;
            color: #f53003;
            font-size: 42px;
        }

        .welcome {
            font-size: 20px;
            margin-bottom: 30px;
            color: #555;
        }

        .student-info {
            text-align: left;
            border-top: 1px solid #ddd;
            padding-top: 25px;
        }

        .student-info p {
            margin: 12px 0;
            font-size: 17px;
        }

        .label {
            font-weight: bold;
        }

        .date {
            margin-top: 25px;
            font-size: 16px;
            color: #666;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Hello Laravel!</h1>

        <p class="welcome">
            Welcome to Client-Server Technologies.
        </p>

        <div class="student-info">

            <p>
                <span class="label">Student Name:</span>
                Joshua B. Llanto
            </p>

            <p>
                <span class="label">Student Number:</span>
                0124-0437
            </p>

            <p>
                <span class="label">Course:</span>
                BSIT- Bachelor of Science in Information Technology
            </p>

            <p>
                <span class="label">Section:</span>
                3C
            </p>

            <p>
                <span class="label">Subject:</span>
                ITST 302 – Client-Server Technologies
            </p>

        </div>

        <p class="date">
            <span class="label">Current Date:</span>
            {{ date('F d, Y') }}
        </p>

    </div>

</body>
</html>