<!DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>Product Management System</title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
            color: #1a1a1a;
        }
        
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0,0,0,.08);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-weight: 600;
            color: #2563eb;
            font-size: 1.5rem;
        }

        .nav-link {
            color: #4b5563;
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: #2563eb;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }
        
        .card {
            background: #ffffff;
            border-radius: 1rem;
            border: none;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,.1), 0 2px 4px -1px rgba(0,0,0,.06);
            margin-bottom: 2rem;
            overflow: hidden;
        }
        
        .card-header {
            background-color: #ffffff;
            border-bottom: 1px solid #e5e7eb;
            padding: 1.25rem;
            font-weight: 600;
        }
        
        .btn {
            padding: 0.5rem 1rem;
            font-weight: 500;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background-color: #2563eb;
            border-color: #2563eb;
        }
        
        .btn-primary:hover {
            background-color: #1d4ed8;
            border-color: #1d4ed8;
            transform: translateY(-1px);
        }
        
        .btn-success {
            background-color: #059669;
            border-color: #059669;
        }
        
        .btn-success:hover {
            background-color: #047857;
            border-color: #047857;
            transform: translateY(-1px);
        }
        
        .btn-danger {
            background-color: #dc2626;
            border-color: #dc2626;
        }
        
        .btn-danger:hover {
            background-color: #b91c1c;
            border-color: #b91c1c;
            transform: translateY(-1px);
        }
        
        .table {
            background-color: #ffffff;
            border-radius: 0.5rem;
            overflow: hidden;
        }
        
        .table thead th {
            background-color: #f8fafc;
            border-bottom: 2px solid #e5e7eb;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 0.05em;
        }
        
        .form-control {
            border-radius: 0.5rem;
            border: 1px solid #d1d5db;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37,99,235,.2);
        }
        
        .alert {
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
            padding: 1rem 1.5rem;
        }
        
        .alert-success {
            background-color: #ecfdf5;
            border-color: #059669;
            color: #065f46;
        }
        
        .page-title {
            color: #1a1a1a;
            font-weight: 600;
            font-size: 1.875rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .auth-card {
            max-width: 28rem;
            margin: 2rem auto;
        }

        .auth-title {
            font-size: 1.5rem;
            font-weight: 600;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .footer {
            background-color: #ffffff;
            padding: 1.5rem 0;
            margin-top: 3rem;
            border-top: 1px solid #e5e7eb;
        }

        .footer-link {
            color: #2563eb;
            text-decoration: none;
            font-weight: 500;
        }

        .footer-link:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }
            
            .card {
                margin-bottom: 1rem;
            }
            
            .table-responsive {
                margin-bottom: 1rem;
            }

            .page-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head> 
<body>    
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Product Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="nav-link border-0 bg-transparent">Logout</button>
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container"> 
        @yield('content') 
    </div> 

    <footer class="footer">
        <div class="container">
            <div class="text-center">
                <a href="https://www.usjr.edu.ph/" class="footer-link">
                    <strong>University of San Jose - Recoletos</strong>
                </a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 
</body> 
</html> 