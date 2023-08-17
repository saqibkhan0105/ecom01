@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h1 class="display-4 text-center">Ecommerce-app</h1>
        <h4 class="mt-5">Products</h4>
        <table class="table table-hover table-bordered ">
            <thead>
                <tr>
                    <th>Method</th>
                    <th>Api</th>
                    <th>Function</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>GET|HEAD</td>
                    <td>---/api/product</td>
                    <td>show all products</td>
                </tr>
                <tr>
                    <td>GET|HEAD</td>
                    <td>---/api/product/{product}</td>
                    <td>Show product</td>
                </tr>
                <tr>
                    <td>GET|HEAD</td>
                    <td>---/api/product/{product}/reviews</td>
                    <td>Show product with reviews</td>
                </tr>
                <tr>
                    <td>POST</td>
                    <td>---/api/product</td>
                    <td>create new product</td>
                </tr>
                <tr>
                    <td>PUT|PATCH</td>
                    <td>---/api/product/{product}</td>
                    <td>Update product</td>
                </tr>
                <tr>
                    <td>DELETE </td>
                    <td>---/api/product/{product}</td>
                    <td>Delete product</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
