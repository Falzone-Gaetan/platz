@extends('template.index')

@section('title')
    {{ $product->title }}
@stop


    @section('content')


    <!-- PORTFOLIO -->

 
          <div class="title-item">
            <div class="title-icon"></div>
            <div class="title-text">{{$product->title}}</div>
            <div class="title-text-2">{{$product->created_at}} by {{$product->author->pseudo}}</div>
          </div>

          <div class="work">
            <figure class="white">
              <img src="{{asset('img/'.$product->image)}}" alt="" />
              <figcaption>
                
                <a
                  href="{{ route('products.edit', $product->id) }}"
                  class="btn btn-primary"
                  style="display: inline-block; margin: 1em 0"
                
                  >Edit</a
                >
             
                
               
              
                <a
               href="#"
                  class="btn btn-secondary"
                  style="display: inline-block; margin: 1em 0"
                  onclick="event.preventDefault(); document.getElementById('delete-form-{{$product->id}}').submit();"
                  >Delete 
              </a>
              <form id="delete-form-{{$product->id}}" action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form>
               
              </figcaption>
            </figure>

            <div class="wrapper-text-description">
              <div class="wrapper-file">
                <div class="icon-file">
                  <img
                    src="{{asset('img/icon-psdfile.svg')}}"
                    alt=""
                    width="21"
                    height="21"
                  />
                </div>
                <div class="text-file">{{$product->categories->name}}</div>
              </div>

              <div class="wrapper-weight">
                <div class="icon-weight">
                  <img
                    src="{{asset('img/icon-weight.svg')}}"
                    alt=""
                    width="20"
                    height="23"
                  />
                </div>
                <div class="text-weight">{{$product->filesize}}</div>
              </div>

              <div class="wrapper-desc">
                <div class="icon-desc">
                  <img src="{{asset('img/icon-desc.svg')}}" alt="" width="24" height="24" />
                </div>
                <div class="text-desc">
                  {{$product->text}}
                </div>
              </div>

              <div class="wrapper-download">
                <div class="icon-download">
                  <img
                    src="{{asset('img/icon-download.svg')}}"
                    alt=""
                    width="19"
                    height="26"
                  />
                </div>
                <div class="text-download">
                  <a href="#"><b>{{$product->download}}</b></a>
                </div>
              </div>

              @include('products.sameCategory')

            <div class="post-reply">
              <div id="title-post-send">
                <hr />
                <h2>Your comments</h2>
              </div>
            </div>

            
            @foreach ($product->comments as $comment )
           
            <div class="post-reply" >
              <div class="image-reply-post"></div>
              <div class="name-reply-post">{{$comment->pseudo}}</div>
              <div class="text-reply-post">
               {{$comment->text}}
              </div>
            </div>
     
            @endforeach
            <div class="post-reply" id="liste">
             
            </div>

            <div class="post-send">
              <div id="main-post-send">
                <div id="title-post-send">Add your comment</div>
                <form
                  id="contact"
                  method="post"
                  action="/onclickprod/formsubmit_op.asp"
                >
                @csrf
                <input id='pseudo' type="text" placeholder="pseudo" name="pseudo">
                
                <input type="hidden" name="products_id" id="products_id" value="{{ $product->id }}">
                  <fieldset>
                    <p>
                      <textarea
                        id="text"
                        name="text"
                        maxlength="500"
                        placeholder="Votre Message"
                        tabindex="5"
                        cols="30"
                        rows="4"
                      ></textarea>
                    </p>
                  </fieldset>
                  <div style="text-align: center">
                    <input type="submit" name="envoi" value="Envoyer" />
                  </div>
                </form>
              </div>
            </div>
          </div>

    <!-- SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.6.2.min.js"
    integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function(){
  $('#contact').submit(function(event){
      event.preventDefault();
      var data = $(this).serialize();
      $.ajax({
          type: 'POST',
          url: '/comments',
          data: data,
          success: function(data){
            console.log(data);
          $("#liste").append(`<div class="image-reply-post"></div>
              <div class="name-reply-post">${data.pseudo}</div>
              <div class="text-reply-post">
                ${data.text}
              </div>`);
            $("#pseudo").val("");
          $("#text").val("");
          },
            error: function(data){
                console.log('Error:', data);
                alert('Erreur lors de l\'ajout du commentaire');
            },
           
      });
  });
});



</script>
    
    @stop
