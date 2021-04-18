<html>
    <head>
        <title> Contact Form</title>
    </head>
    <body>
        <form action="{{route('contact')}}" method="POST">
            @csrf
            <label> Name </label><br>
            <input type="text" name="name"   placeholder="Name"> <br>
            <label> Email </label><br>

            <input type="email" name="email" placeholder="Email"> <br>
            <label> Message </label><br>

            <textarea type="text" name="message"></textarea><br>
            <button type="submit"> Send Email</button>
        </form>
    </body>

</html>
