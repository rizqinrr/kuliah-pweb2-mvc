<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Management Gym</title>

  <!-- Link Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/public/css/style.css">
  <style>
        html, body {
            height: 100%; /* Pastikan tinggi halaman 100% */
        }
        body {
            display: flex;
            flex-direction: column; /* Gunakan flexbox untuk tata letak */
        }
        .content {
            flex: 1; /* Isi utama mengambil ruang yang tersedia */
        }
    </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5 px-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Gym Management</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
  <li class="nav-item">
    <a class="btn btn-primary mx-1" href="/home">Home</a>
  </li>
  <li class="nav-item">
    <a class="btn btn-primary mx-1" href="/trainers">Trainers</a>
  </li>
  <li class="nav-item">
    <a class="btn btn-primary mx-1" href="/members">Members</a>
  </li>
  <li class="nav-item">
    <a class="btn btn-primary mx-1" href="/attendance">Attendance</a>
  </li>
  <li class="nav-item">
    <a class="btn btn-primary mx-1" href="/WorkoutClass">Workout Class</a>
  </li>
</ul>


      </div>
    </div>
  </nav>
  <div class="content container">
