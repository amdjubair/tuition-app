@extends('layouts.app')

@section('content')
<div style="background-color: ghostwhite">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div style="background-color: #F87005 ; ">
                <div class="card-header" style="font-size: 3rem ">
                  @if($post->user->user_type=='Tutor')
                      <a style="font-size: 28px;color:#080520;">Tuition Wanted ::::</a>
                  @endif
                  @if($post->user->user_type=='Gurdian')
                      <a style="font-size: 28px;color:#FF5733;">Tutor Wanted ::::</a>
                  @endif
                  <a style="font-size: 28px;color:#080520; text-align-last: ">PostNo:{{ $post->id }}</a>

                </div>
                </div>

                <div class="card-body">
                  <div >
                      <div>
                        <a href="/profile/{{$post->user->id}}"  style="font-size: 25px ;color:#080520">Posted By: {{$post->user->name}} </a>
                      </div>
                     <div >
                      <a style="font-size: 25px ;color:#080520">Location: {{$post->address}}</a>
                     </div>
                    <div >
                        <a style="font-size: 25px;color:#080520">Institute: {{$post->institute}}</a>
                    </div>
                     <div >
                        <a style="font-size: 25px;color:#080520">Classes: {{$post->class}}</a>
                    </div>
                    <div >
                        <a style="font-size: 25px;color:#080520">Subjects: {{$post->subject}}</a>
                    </div>
                    <div >
                        <a style="font-size: 25px;color:#080520">Payment: {{$post->payment}}</a>
                    </div>
                     <div >
                        <a style="font-size: 25px;color:#080520">Contact: {{$post->contact}}</a>
                    </div>
                   <button class="btn-btn-primary"><a href="/post" style="color:#080520;font-size:25" >back to post</a></button>
                  </div>
                  <strong >Comments:</strong>
                </div>
              </div>
              </div>

         <!-- show comment -->
            
             <div class="col-md-8">
               
                
                 <ul class="list-group ">
                    @foreach($post->comment as $comments)
                     <li class="list-group-item">
                        <a href="/profile/{{$comments->user->id}}">{{$comments->user['name']}} </a>
                       <a> {{$comments->body}}</a>
                       <p>Commented at :{{$comments->created_at}}</p>
                      </li>
                    @endforeach
                    
                 </ul>
              
              </div>


               <!-- add comment -->
              <div class="col-md-8">
                <div class="card">
                  <div class="card-body">
                     <form action="/post/{{$post->id}}/comments">

                      {{csrf_field()}}
                        <div id="comment" class="form-group">
                          <textarea name="body" class="form-control" >
                        
                          </textarea>
                           
                        </div>

                        <div class="form-group">
                          <button class="btn-btn-primary">comment</button>
                        </div>

                     </form>  
                    </div>
                  </div>
                </div>

        </div>

   </div>  
              
</div>
</div>
@endsection
