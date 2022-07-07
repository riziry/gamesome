@extends('layouts.app')

@section('content')
    <br /><br /><br />
    <div class="cart-text">
        <h1>Cart</h1>
    </div>
    <div class="cart-and-wishlist">
        <table>
            <tr>
                <td rowspan="5">
                    <img src="./assets/images/mousepadsmall.png" alt="mousepadsmall">
                </td>
                <td>HyperX FURY S - Gaming Mouse Pad - Cloth (L)</td>
            </tr>
            <tr>
                <td><b>Rp 259.000<b></td>
            </tr>
            <tr>
                <td>
                    <p></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p></p>
                </td>
            </tr>
            <tr>
                <td>
                    Quantity: 1
                </td>
            </tr>
        </table>
        <hr>
        <table>
            <tr>
                <td rowspan="5">
                    <img src="./assets/images/mousepadsmall.png" alt="mousepadsmall">
                </td>
                <td>HyperX FURY S - Gaming Mouse Pad - Cloth (L)</td>
            </tr>
            <tr>
                <td><b>Rp 259.000<b></td>
            </tr>
            <tr>
                <td>
                    <p></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p></p>
                </td>
            </tr>
            <tr>
                <td>
                    Quantity: 1
                </td>
            </tr>
        </table>
        <hr>
        <div class="flex-container">
            <div class="flex-item-left">
                <div class="summary-left">
                    Summary
                    <br />Total Price
                </div>
            </div>
            <div class="flex-item-right">
                <div class="summary-right">
                    2 item
                    <br />Rp518.000
                    <br />
                    <br />
                    <button id ="myBtn" class="add-to-cart-button">
                        Buy
                    </button>

                    <div id="myBuy" class="buy">

                    <div class="buy-content">
                        <h1>Purchase Confirmed</h1>
                        <p>Shipment process will take no longer than a week. Please wait for the package after!</p>
                        <button type="button" class="start-shopping-button-2">
                            <a class="blue-button" href='cart.html'>
                                Confirm
                            </a>
                        </button>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br /><br />
@endsection
