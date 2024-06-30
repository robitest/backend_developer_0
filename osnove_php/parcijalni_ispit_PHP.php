<?php
session_start();

const FILE_PATH = __DIR__ . '/words.json';

$words = file_get_contents(FILE_PATH);

$words = json_decode($words, true);

if(isset($_POST['sendWord'])){
    if(empty($_POST['word'])){
        $_SESSION['errors'] = 'Polje ne smije biti prazno!';
    }else{
        $wordLen = mb_strlen($_POST['word']);
        $vowels= countVolwes($_POST['word']);
        $consonants = $wordLen - $bravowels;
        $words[] = [
            "word" => $_POST['word'],
            "wordLen" => $wordLen,
            "consonants" => $consonants,
            "vowels" => $vowels
        ];
        $words = json_encode($words);
        file_put_contents(FILE_PATH, $words);
        header("Location: parcijalni_ispit_PHP.php");
    }
}

function countVolwes($word) {
    $pattern = '/[aeiouAEIOU]/';
    preg_match_all($pattern, $word, $matches);
    return count($matches[0]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcijalni ispit PHP</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <main>
        <form action="parcijalni_ispit_PHP.php" method="POST">
            <label for="word"><?=$_SESSION['errors'] ?? 'Upišite riječ'?></label>    
            <input type="text" name="word">
            <input type="submit" name="sendWord" value="Pošalji">
        </form>
        <table border="1">
            <tbody >
                <tr>
                    <th>Riječ</th>
                    <th>Broj slova</th>
                    <th>Broj suglasnika</th>
                    <th>Broj samoglasnika</th>
                </tr>
                <?php
                    if(is_array($words)){
                        foreach($words as $k => $w){?>
                            <tr>
                                <td><?=$w['word']?></td>
                                <td><?=$w['wordLen']?></td>
                                <td><?=$w['consonants']?></td>
                                <td><?=$w['vowels']?></td>
                            </tr>
                        <?php    
                        }
                    }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>

<?php session_unset(); ?>