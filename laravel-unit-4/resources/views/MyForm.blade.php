<div>
    <form method="POST" action="/submit">
        @csrf
        <label for="">Name</label>
        <input type="text" name = "name" value="{{old('name')}}">
        <br><br>
        @error('name')
            <p style="color:red">{{$message}}</p>
        @enderror

         <label for="">Email</label>
        <input type="email" name = "email" value="{{old('email')}}">
        <br><br>
        @error('email')
            <p style="color:red">{{$message}}</p>
        @enderror

        <label for="">Phone</label>
        <input type="tel" name = "phone" value="{{old('phone')}}">
        <br><br>
        @error('phone')
            <p style="color:red">{{$message}}</p>
        @enderror

        <button type="submit" style="background-color: green; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Submit</button>
    </form>
</div>
