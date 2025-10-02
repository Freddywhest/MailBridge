<!DOCTYPE html>
<html>
<head>
    <title>Mail Sender</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-3 bg-light vh-100 p-3">
            <h5>Navigation</h5>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="{{ route('google') }}">Google Mail</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('digitalocean') }}">Digital Ocean Mail</a></li>
            </ul>
        </div>
        <!-- Content -->
        <div class="col-9 p-4">
           {{ $slot }}
        </div>
    </div>
</div>
@livewireScripts
</body>
</html>
