<?php
session_start();
// $_SESSION = array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bot</title>
</head>
<body>
    <h1>Stuur een bericht</h1>
    <form action="botsend.php" method="post">
        <div>Naam: <input type="text" name="Naam"></div>
        <div>Vraag: <textarea cols="30" rows="10" name="Vraag"></textarea></div>
        <div><button type="submit">Stuur bericht</button></div>
    </form>
    <h2>Chat geschiedenis</h2>
    <button type="button" onclick="checkForAnswers()">Check op antwoorden</button>
    <?php
    foreach($_SESSION as $id => $text) {
        echo '<div style="padding:10px;margin:10px;border:1px solid #CCC;">';
        echo $id . '<br />';
        echo $text . '<br />';
        echo 'Antwoord: <span id="' . $id . '"><i>Nog geen antwoord</i></span>';
        echo '</div>';
    }
    ?>
</body>
</html>
<?php
//https://api.telegram.org/bot6081235005:AAECPLARV5neu7_BpmEAhQUB0j79fQX0qH4/getUpdates
?>
<script>
    function checkForAnswers() {
        let xhr = new XMLHttpRequest();
        xhr.open("GET", "https://api.telegram.org/bot6081235005:AAECPLARV5neu7_BpmEAhQUB0j79fQX0qH4/getUpdates", false);
        try {
            xhr.send();
            if (xhr.status != 200) {
                console.log('Some error');
            } else {
                res = JSON.parse(xhr.response);
                res.result.forEach(mes => {
                    if(mes.message.reply_to_message) {
                        let answerEl = document.querySelector('#messid_' + mes.message.reply_to_message.message_id);
                        if(answerEl) {
                            answerEl.innerHTML = '<b>' + mes.message.text + '</b>';
                        }
                    }
                });
            }
        } catch(err) {
            console.log("Request failed");
        }
    }
    checkForAnswers();
</script>