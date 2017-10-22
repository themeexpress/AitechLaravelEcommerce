<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;
use App\Shipping;
use App\Order;
use App\Payment;
use App\OrderDetails;
use Cart;

class CheckoutController extends Controller {

    public function checkout() {
        return view('front_end.checkout.checkout');
    }

    public function customerRegistration(Request $request) {
        $this->validate($request, [
            'first_name' => 'required',
            'phone_number' => 'required',
            'email_address'=>'required|unique:customers|max:255'
        ]);
        $customer = new Customer();
        $customer->first_name = $request->input('first_name');
        $customer->last_name = $request->input('last_name');
        $customer->email_address = $request->input('email_address');
        $customer->password = bcrypt($request->input('password'));
        $customer->phone_number = $request->input('phone_number');
        $customer->address = $request->input('address');
        $customer->district_name = $request->input('district_name');
        $customer->save();
        Session::put('customer_id', $customer->id);
        return redirect('/shipping-info');
    }

    public function saveShippingInfo() {
        $customer_id = Session::get('customer_id');
        $customer = Customer::where('id', $customer_id)->first();
        return view('front_end.checkout.shipping', ['customer' => $customer]);
    }

    public function createShippingInfo(Request $request) {
        $this->validate($request, [
            'full_name' => 'required',
            'phone_number' => 'required',
        ]);
        $shipping = new Shipping();
        $shipping->full_name = $request->input('full_name');
        $shipping->email_address = $request->input('email_address');
        $shipping->phone_number = $request->input('phone_number');
        $shipping->address = $request->input('address');
        $shipping->district_name = $request->input('district_name');
        $shipping->save();
        Session::put('shipping_id', $shipping->id);
        return redirect('/payment-info');
    }

    public function showPaymentForm() {
        return view('front_end.checkout.payment');
    }

    public function saveOrderInfo(Request $request) {

        $this->validate($request, [
            'payment_type' => 'required',
            'delivery_time'=> 'required'
        ]);
        $payment_type = $request->input('payment_type');
        $delivery_time=$request->input('delivery_time');
        if ($payment_type == 'cash_on_delivary') {
            $order = new Order();
            $order->customer_id = Session::get('customer_id');
            $order->shipping_id = Session::get('shipping_id');
            $order->order_total = Session::get('order_total');
            $order->save();
            Session::put('order_id', $order->id);

            $payment = new Payment();
            $payment->order_id = Session::get('order_id');
            $payment->payment_type = $request->input('payment_type');
            $payment->delivery_time=$request->input('delivery_time');
            $payment->save();

            $cart_prodicts = Cart::content();
            foreach ($cart_prodicts as $cart_product) {
                $orderDetails = new OrderDetails();
                $orderDetails->order_id = Session::get('order_id');
                $orderDetails->product_id = $cart_product->id;
                $orderDetails->product_name = $cart_product->name;
                $orderDetails->product_price = $cart_product->price;
                $orderDetails->product_quantity = $cart_product->qty;
                $orderDetails->save();
            }
            return redirect('/customer-home');
            
        } else if ($payment_type == 'paypal') {
            echo 'In Payapl';
            exit();
        } else if ($payment_type == 'bkash') {
            echo 'In Bkash';
            exit();
        }
    }

    public function customerHome() {
        return view('front_end.customer.customer_home',['message'=>'Thanks for your Valuable order. We will contact you.']);
    }

}
