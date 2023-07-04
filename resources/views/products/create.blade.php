@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
<br /> 
@endif
<form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="title">Title:</label>
    <input type="text" id="title" name="title"><br>
  
    <label for="text">Text:</label>
    <textarea id="text" name="text"></textarea><br>
    
    <label for="image">Image:</label>
    <input type="file" id="image" name="image"><br>

    <label for="filezise">Filesize:</label>
    <input type="file" id="filesize" name="filezise"><br>
    
    <label for="author">Author:</label>
    <select id="author" name="authors_id">
        @foreach (\App\Models\Author::all() as $author)
      <option value="{{$author->id}}">{{$author->pseudo}}</option>
      @endforeach
    </select>
    
    <label for="categories">Categories:</label>
    <select id="categories" name="categories_id">
        @foreach (\App\Models\Category::all() as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>
    <br>
    
    <input type="submit" value="Submit">
  </form>



  <style>
    form {
      width: 500px;
      margin: auto;
      padding: 20px;
      background-color: #f5f5f5;
      border-radius: 10px;
    }
    
    label {
      font-weight: bold;
      display: block;
      margin-bottom: 10px;
    }
    
    input[type="text"], textarea {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
    }
    
    input[type="submit"] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    
    select {
      width: 100%;
      padding: 16px 20px;
      border: 2px solid #ccc;
      border-radius: 4px;
      background-color: #f5f5f5;
      margin-bottom: 10px;
    }
    </style>
