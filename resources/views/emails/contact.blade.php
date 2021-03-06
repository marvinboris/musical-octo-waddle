<div style="background-color: #eee; padding-bottom: 15px; color: #333;">
    <div style="margin: auto; width: 30rem; max-width: 100%; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
        <div style="text-align: center; padding: 15px;">
            <img src="{{ asset('images/DOMOTECS.png') }}" alt="" width="200">
        </div>
        <div style="border-radius: 3px; overflow: hidden; background-color: white; box-shadow: 0px 3px 6px #444; -webkit-box-shadow: 0px 3px 6px #444; -moz-box-shadow: 0px 3px 6px #444;">
            <div style="padding: 15px 30px; background-image: linear-gradient(to right, #999, #ccc);">
                <h2 style="margin: 0; color: white; font-weight: 500;">Notification de contact</h2>
            </div>
            <div style="padding: 15px 30px; font-size: .9rem; line-height: 1.6;">
                <span style="font-weight: 500;">Objet :</span> {{ $object }}<br><br>

                <span style="font-weight: 500;">Nom :</span> {{ $name }}<br>
                <span style="font-weight: 500;">Email :</span> {{ $email }}
                
                <p><span style="font-weight: 500;">Corps du message :</span><br>{{ $myMessage }}</p>
            </div>
        </div>
    </div>
</div>