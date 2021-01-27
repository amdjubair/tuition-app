<div class="col-md-6">
  <div class="card flex-md-row mb-4 box-shadow h-md-250">
    <div class="card-body d-flex flex-column ">
      <div style="background-color:#084C93;">
      

      @if($post->user->user_type=="Tutor")
          <strong> <a style="font-size: 28px;color: cornflowerblue"> {{"Tuition Wanted ::::"}}</a></strong>
      @endif

      @if($post->user->user_type=="Guardian")
           <strong> <a style="font-size: 28px;color: cornflowerblue  "> {{"Tutor Wanted :::: "}}</a></strong>
      @endif

      


      <strong class="d-inline-block mb-2 text-primary"><a style="font-size: 28px">Post No:{{$post->id}}</a></strong>
      
      <h5 class="mb-0">
        <a style="color:ghostwhite">Location: {{$post->address}}</a>
      </h5><br>

    
      
        
        <ul><h5>
          <li ><a href="/profile/{{$post->user->id}}" style="color: ghostwhite">{{$post->user->name}}</a>  </li><br>
          <li style="color:ghostwhite">Posted at: {{$post->created_at->toDayDateTimeString()}}</li><br>
          <li style="color:ghostwhite">Tutor institute: {{$post->institute}}</li><br>
          <li style="color:ghostwhite">Class: {{$post->class}}</li>
        </h5>
        </ul>
      <a href="/post/{{$post->id}}" style="font-size: 25px;color:ghostwhite"><button style="background-color: cornflowerblue;">Click to see full post</button></a>
      </div>
    </div>
  </div>
</div>
