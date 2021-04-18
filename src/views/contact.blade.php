<html>
    <head>
        <title> Send Mail </title>
        <style>
            .content {
                margin: auto;
                width: 60%;
                padding: 10px;
            }
        </style>
    </head>
    <body>
    <div class="content">
        <fieldset>
            <legend>Send Email :</legend>
            <form action="{{route('contact')}}" method="POST">
                @csrf
                <label> Your Name </label><br>
                <input type="text" name="name"   placeholder="Name"> <br><br>
                <label> Mail To </label><br>
                <input type="email" name="email" placeholder="Email"> <br><br>
                <label> Message </label><br>
                <textarea type="text" name="message"></textarea><br><br>
                <button type="submit"> Send Email</button>
            </form>
        </fieldset>
    </div>
    </body>

</html>
