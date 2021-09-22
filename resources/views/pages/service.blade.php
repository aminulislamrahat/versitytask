<h1 style="color: rgb(59, 219, 206)">This is service page</h1>
<x-navbar/>

<h2 style="color: rgb(172, 214, 172)">There is some popular mobile brand</h2>
@foreach($products as $item)
    <h3 style="color: rgb(198, 105, 221)">{{ $item }}</h3>

@endforeach
