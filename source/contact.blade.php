@extends('_layouts.master')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>

    <form action="https://formcarry.com/s/{{ $page->services->formcarry }}" method="post">
        <div>
            <label for="sender">Name</label><br>
            <input type="text" name="sender" id="sender" required>
        </div>

        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="message">Message</label><br>
            <textarea name="message" id="message" required></textarea>
        </div>

        <input type="text" name="_gotcha" style="display: none;">
        <input type="hidden" id="captchaResponse" name="g-recaptcha-response" />

        <input type="submit" name="submit" value="Send">
    </form>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute("6LfPVeUfAAAAAOuLuXnr8-6DHWS6fg32guoEGhgh", {action: "contact"})
                .then(function(token) { 
                    document.getElementById('captchaResponse').value = token;
                }); 
        });
    </script>
@endsection
