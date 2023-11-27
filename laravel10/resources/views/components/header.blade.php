<div>
  It is not the man who has too little, but the man who craves more, that is poor. - Seneca<br>
  {{$company}}

  <ul>
    @foreach ($products as $product)
        <li>{{$product}}</li>
    @endforeach
  </ul>
</div>