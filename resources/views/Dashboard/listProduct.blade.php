@extends('Dashboard.layouts.Navbar')
@section('content')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="body-wrapper">
            <div class="container p-4">
                <div class="d-flex flex-row justify-content-between align-items-center mb-4">
                    <h2>Product List</h2>
                    <div class=" mb-4">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add
                            Product</button>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>

                            <th scope="col">Items Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Brands</th>
                            <th scope="col">Type</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="placeholder-glow">
                        <tr>
                            <th scope="row"><span class="placeholder rounded loading" scope="row">Shoes Sandle</span>
                            </th>
                            <td><span class="placeholder rounded loading" scope="row">Rs 5000</span>
                            </td>
                            <td><span class="placeholder rounded loading " scope="row">30</span></td>
                            <td><span class="placeholder rounded loading" scope`="row">Sandle</span>
                            </td>
                            <td><span class="placeholder rounded loading" scope="row">pK</span></td>
                            <td><span class="placeholder rounded loading" scope="row">40</span></td>
                            <td class="d-flex gap-4">
                                <a href="#" class="text-danger">Edit</a>
                                <button class="text-success">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><span class="placeholder rounded loading" scope="row">Shoes Sandle</span></th>
                            <td><span class="placeholder rounded loading" scope="row">Rs 5000</span></td>
                            <td><span class="placeholder rounded loading" scope="row">30</span></td>
                            <td><span class="placeholder rounded loading" scope`="row">Sandle</span></td>
                            <td><span class="placeholder rounded loading" scope="row">pK</span></td>
                            <td><span class="placeholder rounded loading" scope="row">40</span></td>
                            <td class="d-flex gap-4">
                                <a href="#" class="text-danger">Edit</a>
                                <button class="text-success">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><span class="placeholder rounded loading" scope="row">Shoes Sandle</span></th>
                            <td><span class="placeholder rounded loading" scope="row">Rs 5000</span></td>
                            <td><span class="placeholder rounded loading" scope="row">30</span></td>
                            <td><span class="placeholder rounded loading" scope`="row">Sandle</span></td>
                            <td><span class="placeholder rounded loading" scope="row">pK</span></td>
                            <td><span class="placeholder rounded loading" scope="row">40</span></td>
                            <td class="d-flex gap-4">
                                <a href="#" class="text-danger">Edit</a>
                                <button class="text-success">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('Dashboard.Modals.AddProduct')
@endsection