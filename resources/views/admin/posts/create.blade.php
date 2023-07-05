<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<style>
    input,
    button {
        height: 30px;
        margin-bottom: 7px;
    }


    span{
        color: red;
    }
</style>

<body>

    <div style="width: 100%">

        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data"
            style="
            display: flex ;
            justify-content: center;
            flex-direction: column;
            width: 400px
            ">
            @csrf
            <label for="">title</label>
            <input type="text" name="title" placeholder="title" value={{ old('title') }} >
            @error('title')
            <span>
                {{ $message}}
            </span>    
            @enderror
            <label for="">cover image</label>
            <input type="file" name="cover_image">
            @error('cover_image')
            <span>
                {{ $message}}
            </span>    
            @enderror
            <label for="">description</label>
            <textarea name="description" id="" cols="30" rows="10" value={{ old('description') }}></textarea>
            @error('description')
            <span>
                {{ $message}}
            </span>    
            @enderror
            <label for="">is paid ?</label>
            <input type="checkbox" name="is_paid" id="" placeholder="is_paid">
            @error('is_paid')
            <span>
                {{ $message}}
            </span>    
            @enderror
            <label for="">price</label>
            <input type="text" name="price" placeholder="price" value={{ old('price') }}>
            @error('price')
            <span>
                {{ $message}}
            </span>    
            @enderror
            <label for="">start_at</label>
            <input type="date" name="start_at" id="" placeholder="start_at">
            @error('start_at')
            <span>
                {{ $message}}
            </span>    
            @enderror
            <label for="">end_at</label>
            <input type="date" name="end_at" id="" placeholder="end_at">
            @error('end_at')
            <span>
                {{ $message}}
            </span>    
            @enderror
            <label for="">category_id </label>
            <select name="category_id" id="category_id">
                <option value="1">category 1</option>
                <option value="2">category 2</option>
                <option value="3">category 3</option>
                <option value="4">category 4</option>
            </select>
            @error('category_id')
            <span>
                {{ $message}}
            </span>    
            @enderror
            <label for="">status </label>
            <select name="status" id="status">
                <option value="approved">approved</option>
                <option value="pending">pending</option>
                <option value="rejected">rejected</option>
               
            </select>
            @error('status')
            <span>
                {{ $message}}
            </span>    
            @enderror

            <button type="submit">submit</button>

        </form>
    </div>

</body>

</html>
