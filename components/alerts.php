<table style="width: 100%">
    <tr>
        <td>
            <div class="alertBlue">
                <!--<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>-->
                Cicero Interactive bedankt sich bei all den großzügigen Spendern,
                durch deren selbstlosen Opfergaben wir das Lateinparadies für mindestens ein weiteres halbes Jahr konstant mit Updates und Fehlerverbesserungen versorgen können!
                Auflistung aller Spender: <a href="Hall-of-Fame.php"><font color="#FFCC00">Hall of Fame</font></a>
            </div>
            <div class="alertRed">
                <!--<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>-->
                Durch ein technisches Problem wurden alle "ä"-, "ö"- und "ü"-Zeichen in Kleinbuchstaben konvertiert.
                Trotz detaillierter Fehlersuche kann es sein, dass ein paar übersehen wurden. Sollte Euch ein solcher Fehler auffallen, kontaktiert uns bitte unter unserer E-Mail Adresse.
            </div>
            <div class="alertGreen">
                <!--<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>-->
                Das Lateinparadies wird momentan großflächig geupdatet. Freut Euch auf neue Übersetzungen, Infotexte und generell mehr Konsistenz! Verbleibende Zeit bis zum Release:
                <!-- Display the countdown timer in an element -->
                <span id="countdown" style="color: #FFCC00"></span>
                <span id="countdownPostponementInfo">(Zur Qualitätskontrolle wurde der Release nochmals um eine Woche verschoben, die Features sind allerdings alle schon integriert!)</span>
                <span id="countdownSuffix"></span>

                <script>
                    // Set the date we're counting down to
                    var countDownDate = new Date("Dec 01, 2019 22:00:00").getTime();

                    // Update the count down every 1 second
                    var x = setInterval(function() {

                        // Get today's date and time
                        var now = new Date().getTime();

                        // Find the distance between now and the count down date
                        var distance = countDownDate - now;

                        // Time calculations for days, hours, minutes and seconds
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        // Display the result in the element with id="countdown"
                        document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

                        // If the count down is finished, write some text
                        if (distance < 0) {
                            document.getElementById("countdown").innerHTML = '0d 0h 0m 0s';
                            document.getElementById("countdownPostponementInfo").innerHTML = '';
                            document.getElementById("countdownSuffix").innerHTML = '| Klicke <a href="" style="color: #FFCC00">hier</a>, um die Seite zu aktualisieren!';
                        }
                    }, 1000);
                </script>
            </div>
        </td>
    </tr>
</table>