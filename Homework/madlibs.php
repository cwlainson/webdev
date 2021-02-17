<doctype html/>
<html>
<body>
<head>
    <h1>Madlib Exercise</H1>
        <form>
            <label for="noun">Noun</label>
            <input type="text" id=noun name=noun>
            <br>
            <label for="male celebrity">Male Celebrity</label>
            <input type="text" id=mceleb name=mceleb>
            <br>
            <label for="adjective">Adjective</label>
            <input type="text" id=adjective name=adjective>
            <br>
            <label for="noun1">Noun</label>
            <input type="text" id=noun1 name=noun1>
            <br>
            <label for="adverb">Adverb</label>
            <input type="text" id=adverb name=adverb>
            <br>
            <label for="verb">Verb</label>
            <input type="text" id=adverb name=adverb>
        </Form>
            
    <?php
        
    echo "while walking down the street yesterday I looked down and saw a {noun}, <br>";
    echo "it had a name tag on it that said it belonged to {mceleb}. <br>";
    echo "I thought it was a little bit {adjective} for a celebrity like him, but I picked it up anyway <br>";
    echo "and brought it to a pawn shop to see if I could trade it for a {noun} t-shirt once owned by OJ Simpson. <br>";
    echo "The pawn guy said it looked like it was authentic and {adverb} accepted the trade but told me to {verb} and leave 
        before OJ found out.<br>";
    ?>
        <form action="madlibs.php" method="post">
            <input type="submit">
        </form>

        