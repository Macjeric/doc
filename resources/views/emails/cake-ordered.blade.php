@component('mail::message')
# Cake Oder 

Hello Chef, there is an order from a customer, details below: <br>
- <b>Type of Cake:</b> {{ $order->choice }} 
- <b>Name:</b> {{ $order->name }} 
- <b>Phone Number:</b> {{ $order->pnum }} 
- <b>Cake Quantity:</b> {{ $order->quantity }} 
- <b>Cake kgs (Optional):</b> {{ $order->kgs }} 

@component('mail::panel')
Accordingly, the customer orders are dealed by time of email delivered.
@endcomponent

@component('mail::button', ['url' => 'pagesmade.com/kitchen'])
Home 
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
