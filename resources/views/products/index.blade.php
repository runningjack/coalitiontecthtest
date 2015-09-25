<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 9/25/15
 * Time: 5:20 PM
 */
?>

@extends("layouts.default")
@section("content")
<div class="container-fluid">
    <div class="row">

        <form>

            <div class="col-md-6">


                <div class="form-group">
                    <label for="firstname">Product Name</label>
                    <input type="text" id="productname" name="productname" class="form-control" required placeholder="first name" value="{{Input::old('productname')}}">
                </div>

                <div class="form-group">
                    <label for="firstname">Qty In Stock</label>
                    <input type="text" id="quantity" name="quantity" class="form-control" required placeholder="Quantity In stock" value="{{Input::old('quantity')}}">
                </div>

                <div class="form-group">
                    <label for="firstname">Price</label>
                    <input type="text" id="price" class="form-control" name="price" required placeholder="Price" value="{{Input::old('price')}}">
                </div>

                <div class="form-group">

                    <a id="save" class="btn btn-primary">Submit</a>
                </div>

                <div>
                    <table>
                        <thead>
                        <th>Product Name</th><th></th>
                        </thead>
                    </table>
                </div>

            </div>


            <di

        </form>

    </div>
</div>
@stop