  @extends('app') 

  @section('content')
  

  
   <div class="content">

    About you 

    @foreach ($job as $item)
        
    <ul>
   <li> {{$item}}</li>
</ul>
    @endforeach
    <div class="title m-b-md">

       

</div>




</div>
@endsection