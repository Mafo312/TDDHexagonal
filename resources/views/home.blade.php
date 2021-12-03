@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-header" id="dashboard"></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <form action="{{asset(route('modal.creat'))}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="nameProduct" class="form-control" id="nameProduct" placeholder="Entrez le nom du produit">
                            </div>
                            <div class="form-group">
                                <input type="number" name="productPrice" class="form-control" id="productPrice" placeholder="Entrez le prix du produit">
                            </div>
                            <div class="form-group">
                                <input type="number" name="productQuantity" class="form-control" id="productQuantity" placeholder="Entrez la quantité">
                            </div>
                            <input type="submit" name="save" value="Enregistrer" style="color: white;" class="btn btn-primary">
                        </form>
                    </div>
                </div>
                <div class="p-3">
                    <table class="table table-bordered" id="providersFormElementsTable">
                        <thead class="text-center">
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">First Name</th>
                              <th scope="col">Last Name</th>
                              <th scope="col">Phone</th>
                            <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody class="text-center">
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                              <td>
                                <a href="#" class="btn btn-info btn-sm" style="color: white;">Detail</a>
                                <a href="#" class="btn btn-warning btn-sm" style="color: white;">Edit</a>
                                  <a href="#" class="btn btn-danger btn-sm" style="color: white;">Delete</a>
                             </td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                                <td style="color: white;">
                                    <a href="#" class="btn btn-info btn-sm" style="color: white;">Detail</a>
                                    <a href="#" class="btn btn-warning btn-sm" style="color: white;">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm" style="color: white;">Delete</a>
                                </td>
                            </tr>
                          </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
