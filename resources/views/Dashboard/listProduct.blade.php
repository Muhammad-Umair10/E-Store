@extends('Dashboard.layouts.Navbar')
@section('content')
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="body-wrapper">
        <div class="container p-4">
            <table class="table">
                <thead>
                    <tr>
                        
                        <th scope="col">Items Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Type</th>
                        <th scope="col">Stock</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Shoes Sandle</th>
                        <td>Rs 5000</td>
                        <td>30</td>
                        <td>Sandle</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection